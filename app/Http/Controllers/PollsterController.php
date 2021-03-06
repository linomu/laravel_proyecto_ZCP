<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use mysql_xdevapi\Exception;
use Validator;

class PollsterController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except('show','update');
        $this->middleware('evaluator')->only('update','show');
    }


    public function index()
    {
        //$admins = App\Actors::query()->where('admin_id', auth()->user()->actors_id)->paginate(5);
        $admins = DB::table('actors')
            ->join('users','actors.id','users.actors_id')
            ->select('actors.firstname as firstname', 'actors.lastname AS lastname', 'users.email as email', 'actors.id as id')
            ->where('actors.admin_id',auth()->user()->actors_id)
            ->where('users.rol','evaluator')
            ->paginate(5);
        return view('evaluator.list',compact('admins'));
    }


    public function create()
    {
        return view('evaluator.create');
    }


    public function store(Request $request)
    {
        //Con $request->all(); podemos saber todo lo que nos llega en el objeto request


        $request->validate([
            'txt_name'=>'required',
            'txt_personal_id'=>'required|unique:actors,id',
            'txt_last_name'=>'required',
            'txt_email'=>'required',
            'gender'=>'required',
            'birthday'=>'required',
        ]);
        print_r($request->all());



        //Al momento de crear el administrador tambien hay que crear en la tabla usuario

        $newEvaluator = new App\Actors;
        $newEvaluator->id=$request->txt_personal_id;
        $newEvaluator->admin_id = auth()->user()->actors_id;
        $newEvaluator->firstname = $request->txt_name;
        $newEvaluator->lastname = $request->txt_last_name;
        $newEvaluator->gender = $request->gender;
        $newEvaluator->phonenumber = $request->txt_number;
        $newEvaluator->birth_date= $request->birthday;
        $newEvaluator->ulrphoto='usuario.png';
        $newEvaluator->save();

        $user = new App\User;
        $pass = substr(md5(microtime()), 1, 8);
        $user->actors_id =$request->txt_personal_id;
        $user->email = $request->txt_email;
        $user->password = Hash::make($pass);
        $user->rol = "evaluator";
        $user->save();

        $this->enviarEmail($pass,$request->txt_email,  $request->txt_name);

        return back()->with('mensaje','El Evaluador ha sido agregado correctamente! Recibirá un correo con su correspondiente contraseña');
    }


    public function enviarEmail($pass, $correo, $firstname){
        $ip = $_SERVER['REMOTE_ADDR'];
        $ruta = $ip."/laravel_proyecto_ZCP/public/";
        $data = array(
            'pass'=>$pass,
            'path'=>$ruta,
            'name'=>$firstname,
        );
        Mail::send('email.newUserEmail',$data,function ($messaje) use ($correo){
            $messaje->from('alejandro1094@gmail.com','Zorros Privativos Comunes');
            $messaje->to($correo)->subject('Bienvenido a nuestro Sistema');
        });


        //return "Tu email ha sido enviado";
        //return view('evaluator.sendSurvey');
    }

    public function show($id)
    {
        //$pollster = App\Actors::findOrFail($id);

            $actor = DB::table('actors')
                ->join('users','actors.id','users.actors_id')
                ->where('actors.id',$id)
                ->get();
            //The query should bring all the information about this pollster, including the user information.
            return view('layouts.profile', compact('actor'));



    }


    public function edit($id)
    {
        $pollster = App\Actors::findOrFail($id);

        return view('evaluator.editPollster',compact('pollster'));
    }


    public function update(Request $request, $id)
    {


        $request->validate([
            'identification'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'gender'=>'required',
            'birthday'=>'required',
        ]);

        $validacion = Validator::make($request->all(), [
            'urlphoto'=> 'max:500',//indicamos el valor maximo
        ]);

        if ($validacion->fails()) {
            return back()->with('mensajeError','El tamaño máximo es 500kb, debes seleccionar otra foto o modificarla.   ');
        } else {
            //First I must update the actor table before users


            $file = $request->file('urlphoto');


            $actor = App\Actors::findOrFail($id);
            $actor->id = $request->identification;
            $actor->firstname = $request->firstname;
            $actor->lastname = $request->lastname;
            $actor->gender = $request->gender;
            $actor->phonenumber = $request->phonenumber;
            $actor->birth_date = $request->birthday;
            if($file == null){
                $actor->ulrphoto = $actor->ulrphoto;
            }else{
                $actor->ulrphoto = $file->getClientOriginalName();
                $file->move(base_path('public\images'), $file->getClientOriginalName());
            }
            $actor->save();


            //Actualizar user solo la password

            if($request->password != ""){
                $user = DB::table('users')
                    ->where('users.actors_id',$request->identification)
                    ->get();
                $idUser =  $user[0]->id;
                $user = App\User::findOrFail($idUser);

                $user->id = $user->id;
                $user->actors_id = $user->actors_id;
                $user->email = $user->email;
                $user->password = Hash::make($request->password);
                $user->rol = $user->rol;
                $user->save();
            }


            return redirect()->action('HomeController@index')->with('mensaje','Perfil Actualizado!');


        }


    }



    public function destroy(Request $request, $id)
    {
        if($request->ajax()){
            $admin = App\Actors::findOrFail($id);
            $admin->delete();
            return response()->json([
                'mensaje'=>$admin->name.' El evaluador fué eliminado satisfactoriamente!'
            ]);

        }
    }
}
