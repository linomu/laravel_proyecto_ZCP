<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App;

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
        $idTest = $request->selectTest;

        //Save the website in topics
        $newTopic = new App\Topic;
        $newTopic->name = "Defecto";
        $newTopic->description = $request->txtPage;
        $newTopic->save();

        //Save into topic_tests($idTest, $idTopic:consultar la ultima instancia de la tabla topics)
        $idTopic = DB::table('topics')->latest('topics.id')->select('topics.id')->first();
        print($idTopic->id);
        $newTopicTest = new App\Topic_test;
        $newTopicTest->topics_id = $idTopic->id;
        $newTopicTest->tests_id = $idTest;
        $newTopicTest->save();



        // $tipo Join between tests and survey to get tipo from survey
        $ruta = 'www.000webhost.com/zorros/public/$tipo/$idTest';

       // $this->enviarEmail($ruta);
    }

    public function enviarEmail($ruta){
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

        $data = DB::table('tests AS t')->select('t.id' , 't.name')->get();
        /*$data = DB::table('tests')
            ->join('surveys','surveys.id','tests.survey_id')
            ->join('topic_tests','topic_tests.tests_id','tests.id')
            ->join('topics','topic_tests.topics_id','topics.id')
            ->select('tests.id', 'tests.name AS name', 'surveys.tipo', 'topics.description')
            ->where('tests.id',2)
            ->get();*/

        return view('evaluator.sendSurvey',compact('data'));
    }
}
