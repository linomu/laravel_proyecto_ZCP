<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        //$admins = App\Admin::all();
        $admins = App\Actors::paginate(5);
        return view('admin.list',compact('admins'));
    }


    public function create()
    {
        return view('admin.create');
    }


    public function store(Request $request)
    {
        //Con $request->all(); podemos saber todo lo que nos llega en el objeto request


        $request->validate([
            'txt_name'=>'required',
            'txt_personal_id'=>'required|unique:actors,id',
            'txt_last_name'=>'required',
            'txt_email'=>'required',
            'txt_pass'=>'required',
            'txt_number'=>'required',
            'gender'=>'required',
            'birthday'=>'required',
        ]);
        print_r($request->all());



        //Al momento de crear el administrador tambien hay que crear en la tabla usuario

        $newAdmin = new App\Actors;
        $newAdmin->id=$request->txt_personal_id;
        $newAdmin->admin_id = "1";
        $newAdmin->firstname = $request->txt_name;
        $newAdmin->lastname = $request->txt_last_name;
        $newAdmin->gender = $request->gender;
        $newAdmin->phonenumber = $request->txt_number;
        $newAdmin->birth_date= $request->birthday;
        $newAdmin->save();

        $user = new App\User;
        $user->actors_id =$request->txt_personal_id;
        $user->email = $request->txt_email;
        $user->password = Hash::make($request->txt_pass);
        $user->rol = "admin";
        $user->save();


        return back()->with('mensaje','Administrador Agregado!');


    }

    public function show($id = 1)
    {
        $admin = App\Actors::findOrFail($id);
        return view('admin.show', compact('admin'));
    }

    public function edit($id = 1)
    {
        $admin = App\Actors::findOrFail($id);
        return view('admin.edit', compact('admin'));
    }


    public function update(Request $request, $id)
    {


        $admin = App\Actors::findOrFail($id);
        $request->validate([
            'txt_name'=>'required',
            'txt_last_name'=>'required',
            'txt_email'=>'required',
            'txt_user'=>'required',
            'txt_pass'=>'required',
        ]);

        $admin->id=$request->id;
        $admin->firstname = $request->txt_name;
        $admin->lastname = $request->txt_last_name;
        $admin->email = $request->txt_email;
        $admin->username = $request->txt_user;
        $admin->password = $request->txt_pass;
        $admin->save();

        return back()->with('mensaje','Administrador Actualizado!');
    }

    /*public function destroy($id)
    {
        $admin = App\Admin::findOrFail($id);
        $admin->delete();
        return back()->with('mensaje','Administrador Eliminado!');
    }*/

    public function destroy(Request $request, $id)
    {
        if($request->ajax()){
            $admin = App\Actors::findOrFail($id);
            $admin->delete();
            return response()->json([
                'mensaje'=>$admin->name.' fue eliminado satisfactoriamente!'
            ]);

        }
    }
}
