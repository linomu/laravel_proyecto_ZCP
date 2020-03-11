<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PollsterController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {

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
            'txt_number'=>'required',
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
        return view('evaluator.showPollster');
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
