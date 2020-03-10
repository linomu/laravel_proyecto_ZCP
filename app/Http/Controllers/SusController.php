<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App;
use mysql_xdevapi\Table;


class SusController extends Controller
{

	 public function crear(Request $request){
        //return $request->all();
        $sus = new App\Sus;
        $sus->nombre = $request->nombre;
        $sus->tipo = $request->tipo;

        $sus->save();

        return back();
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
       // $this->middleware('auth');
    }

    public function index(Request $request, $id)
    {


        $pag = explode('=',$request->getRequestUri());
        $page = $this->desencriptar($pag[1]);
        //print("pag: ".$pag[1]);
        //$page = $pag[1];
        //$preguntas = Con el $id debes consultar la bd
        //para saber que preguntas estan relacionadas a ese numero de test
        //nombre del test
        //$page = 'http://www.bajalogratis.com';
        //print($page);

        $name = DB::table('tests')->select('description')
                ->where('id',$id)->get();
        $preguntas = DB::table('questions')->select('description')->where('tests_id',$id)->get();

        if($page ==null){
             abort(404);

            //return view('encuestasus', compact('page','name','preguntas'));
        }
        else{
            //$page = 'http://www.bajalogratis.com';
            return view('encuestasus', compact('page','name','preguntas'));
        }

    }

    public function show($id = 1)
    {
        $sus = App\Test::findOrFail($id);
        return view('encuestasus', compact('sus'));
    }

    public function send_answers(Request $request){
        //guardar los datos del usuario

       //$user = new App\Userz;

        //$user->email = $request->InputEmail;
        //$user->gender = $request->;
        //$user->birth_date = $request->;
        //$user->save();

        //int i = 0;
        //guardar los datos de las respuestas
        //$answers = $request->
        //foreach ($answers as $answer) {

            //$answer->userz_tests_id = $testid;
            //$answer->questions_id = $questions[i]->id;
            //$answer->description = $answers[i];
            //$answer->save();

        return back()->with('mensaje','respuestas enviadas!');
    }

}




?>
