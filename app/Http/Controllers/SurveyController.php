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

        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'selectTest'=>'required',
            'textQuestions'=>'required',
        ]);

        $test = new App\Test;
        $test->name = $request->nombre;
        $test->actors_id = auth()->user()->actors_id;
        $test->description = $request->descripcion;
        $test->kindSurvey = $request->selectTest;

        $test->save();

        $question = new App\Question;
        $idTest = DB::table('tests')->latest('tests.id')->select('tests.id')->first();

        $preguntasSinEspacio = str_replace("  "," ", $request->textQuestions);
        //var_dump($preguntasSinEspacio);
        $arrayListaPreguntas = explode(",",$preguntasSinEspacio);
        var_dump($arrayListaPreguntas);

        foreach ($arrayListaPreguntas as $pregunta){
            if ($pregunta == "") {
                continue;
            }
            else {
                $question->description = $pregunta;
                DB::table('questions')->insert(
                    ['tests_id' => $idTest->id, 'description' => $pregunta]
                );
            }
        }

        return back()->with('mensaje','¡Encuesta registrada satisfactoriamente!');
        #return 'Completado';
    }

    public function listarEncuestas(){
        $tests = App\Test::all();
        return view('evaluator.listSurvey', compact('tests'));
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
        $this->middleware('evaluator')->except('prueba');
        //$this->middleware('auth')->only('index');
    }

    public function index()
    {
        return view('evaluator.listSurvey');
    }


    public function create()
    {
        #$tests = App\Test::all();
        $tests = DB::select(DB::raw('SHOW COLUMNS FROM tests WHERE Field = "kindSurvey"'))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $tests, $matches);
        $enum = array();
        foreach(explode(',', $matches[1]) as $value){
            $v = trim( $value, "'" );
            $enum[] = $v;
        }
        #dd($enum[0]);
        return view('evaluator.createSurvey', compact('enum'));
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

    public function prueba(Request $request, $id){

        //print($request->getRequestUri());
        //$page = $request->get('page');
        $pag = explode('=',$request->getRequestUri());
        $page= $this->desencriptar($pag[1]);
        if($page == null){
            abort(404);
        }else{
            //print("Pagina descriptada: ".$page);
            return view('survey',compact('page','id'));
        }

    }


    //Enviar Encuesta a los usuarios
    public function enviarEncuesta(Request $request)
    {
        // print($request->selectTest);
        //print ($request->textUsuarios);
        //print ($request->txtPage);
        //Obtener la lista de correos
        //var_dump($request->textUsuarios);

        $request->validate([
            'textUsuarios' => 'required',
            'txtPage' => 'required',
        ]);

        //dd($request);

        //Obtener los correos del textArea en un arreglo
        $arrayListaCorreos = explode("\n", $request->textUsuarios);
        //Id del test
        $idTest = $request->selectTest;


        //Save the website in topics
        $newTopic = new App\Topic;
        $newTopic->description = $request->txtPage;
        $newTopic->save();

        //Save into topic_tests($idTest, $idTopic:consultar la ultima instancia de la tabla topics)
        $idTopic = DB::table('topics')->latest('topics.id')->select('topics.id')->first();
        $newTopicTest = new App\Topic_test;
        $newTopicTest->topics_id = $idTopic->id;
        $newTopicTest->tests_id = $idTest;
        $newTopicTest->save();

        // $tipo Join between tests and survey to get tipo from survey
        $tipo = DB::table('tests')
            ->select('kindSurvey AS type')
            ->where('tests.id', $idTest)->get();
//        var_dump($tipo);

        $ip = $_SERVER['REMOTE_ADDR'];
        $paginaEncriptada = $this->encriptar($request->txtPage);
        $ruta = $ip."/laravel_proyecto_ZCP/public/".$tipo[0]->type."/".$idTest."?page=".$paginaEncriptada;
        //print("Ruta encriptada: ".$ruta);
        //echo "<br>";
        print ($paginaEncriptada);
        print("Pagina descriptada: ".$this->desencriptar($paginaEncriptada));


        foreach ($arrayListaCorreos as $correo){
            $email = str_replace("\r","",$correo);
            $email2 = str_replace(" ","",$email);
            $this->enviarEmail($ruta,$email2);
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
