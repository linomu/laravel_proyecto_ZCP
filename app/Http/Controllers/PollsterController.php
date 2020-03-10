<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Hash;

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
            'txt_pass'=>'required',
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
        $user->actors_id =$request->txt_personal_id;
        $user->email = $request->txt_email;
        $user->password = Hash::make($request->txt_pass);
        $user->rol = "evaluator";
        $user->save();


        return back()->with('mensaje','Evaluador Agregado!');
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
