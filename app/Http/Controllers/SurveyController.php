<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{

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
        //return view('evaluator.sendSurvey');
    }
    //Enviar Encuesta a los usuarios
    public function organizarEncuesta(){
        return view('evaluator.sendSurvey');
    }
}
