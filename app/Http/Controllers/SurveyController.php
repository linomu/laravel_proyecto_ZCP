<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SurveyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('evaluator.listSurvey');
    }


    public function create()
    {
        return view('evaluator.createSurvey');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
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

    //Enviar Encuesta a los usuarios
    public function enviarEncuesta(Request $request){
        print($request->selectTest);
        print ($request->textUsuarios);
        print ($request->txtPage);

        $data = array(
            'name'=>"Curso Laravel",
        );
        Mail::send('evaluator.surveyEmail',$data,function ($messaje){
            $messaje->from('alejandro1094@gmail.com','Curso Laravel');
            $messaje->to('linomu@unicauca.edu.co')->subject('Test email');
        });

        return "Tu email ha sido enviado";
        //return view('evaluator.sendSurvey');
    }
    //Enviar Encuesta a los usuarios
    public function organizarEncuesta(){
        return view('evaluator.sendSurvey');
    }
}
