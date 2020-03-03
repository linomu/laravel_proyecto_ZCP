<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App;
use mysql_xdevapi\Table;

class SurveyController extends Controller
{
    public function crear(Request $request){
        //return $request->all();
        $survey = new App\Survey;
        $survey->nombre = $request->nombre;
        $survey->tipo = $request->tipo;

        $survey->save();

        return back();
    }

    public function listarTipoEncuestas(){
        $topics = App\Topic::all();
        return view('evaluator.createSurvey', compact('topics'));
    }

    public function listarEncuestas(){
        $surveys = App\Survey::all();
        return view('evaluator.listSurvey', compact('surveys'));
    }

    private function encriptar($valor) {
        $iv = base64_decode("SNwNhfHVDSvnkw8RTMtavw==");
        $clave  = '$%·$%34g4tg3456(/%&)5464·8$%$&$$//(13';
        $method = 'aes-256-cbc';
        return openssl_encrypt ($valor, $method, $clave, false, $iv);
    }

    private function desencriptar ($valor) {
        $clave  = '$%·$%34g4tg3456(/%&)5464·8$%$&$$//(13';
        $method = 'aes-256-cbc';
        $iv = base64_decode("SNwNhfHVDSvnkw8RTMtavw==");
        $encrypted_data = base64_decode($valor);
        return openssl_decrypt($valor, $method, $clave, false, $iv);
    }

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
       // print($request->selectTest);
        //print ($request->textUsuarios);
        //print ($request->txtPage);
        //Obtener la lista de correos
        //var_dump($request->textUsuarios);

        $request->validate([
            'textUsuarios'=>'required',
            'txtPage'=>'required',
        ]);


        $correosSinEspacio = trim($request->textUsuarios);
        //var_dump($correosSinEspacio);
        $arrayListaCorreos = explode(",",$correosSinEspacio);
        //var_dump($arrayListaCorreos);



        $idTest = $request->selectTest;

        //Save the website in topics
        $newTopic = new App\Topic;
        $newTopic->name = "Defecto";
        $newTopic->description = $request->txtPage;
        //$newTopic->save();

        //Save into topic_tests($idTest, $idTopic:consultar la ultima instancia de la tabla topics)
        $idTopic = DB::table('topics')->latest('topics.id')->select('topics.id')->first();
        //print($idTopic->id);
        $newTopicTest = new App\Topic_test;
        $newTopicTest->topics_id = $idTopic->id;
        $newTopicTest->tests_id = $idTest;
        //$newTopicTest->save();

        // $tipo Join between tests and survey to get tipo from survey
        $tipo = DB::table('tests')
            ->join('surveys','surveys.id','tests.survey_id')
            ->select('surveys.tipo AS type')
            ->where('tests.id', $idTest)->get();


        $ip = $_SERVER['REMOTE_ADDR'];
        $paginaEncriptada = $this->encriptar($request->txtPage);
        $ruta = $ip."/LaravelEmail/project/public/".$tipo[0]->type."/".$idTest."?page=".$paginaEncriptada;
        //print("Ruta encriptada: ".$ruta);
        //echo "<br>";
        //print("Pagina descriptada: ".$this->desencriptar($paginaEncriptada));

        foreach ($arrayListaCorreos as $correo){
            $this->enviarEmail($ruta,$correo);
            //echo "Correo a : ".$correo."<br>";
        }

        return back()->with('mensaje','Correos Enviados!');
    }

    public function enviarEmail($ruta, $correo){
        $data = array(
            'name'=>$ruta,
        );
        Mail::send('evaluator.surveyEmail',$data,function ($messaje) use ($correo){
            $messaje->from('alejandro1094@gmail.com','Zorros Privativos Comunes');
            $messaje->to($correo)->subject('Encuesta de Satisfacción de Usuario.');
        });


        //return "Tu email ha sido enviado";
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
