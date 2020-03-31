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
        //$page = $this->desencriptar($pag[1]);

        $correoEncriptado = $pag[2];
        $correo = $this->desencriptar($correoEncriptado);
        //dd($correo);




        //print("pag: ".$pag[1]);
         $page = explode('&',$pag[1]);

        //$preguntas = Con el $id debes consultar la bd
        //para saber que preguntas estan relacionadas a ese numero de test
        //nombre del test
        //$page = 'http://www.bajalogratis.com';
        //print($page);

        $name = DB::table('tests')->select('description')
                ->where('id',$id)->get();
        $preguntas = DB::table('questions')->select('id','description')->where('tests_id',$id)->get();


        $page = $this->desencriptar($page[0]);

        $headers = @get_headers($page);
        if($headers && strpos( $headers[0], '200')) {
            //$page = 'http://www.bajalogratis.com';

            return view('encuestasus', compact('page','name','preguntas','correo','id'));
        }
        else {
            return view('error');
        }





    }

    public function show($id = 1)
    {
        $sus = App\Test::findOrFail($id);
        return view('encuestasus', compact('sus'));
    }

    public function send_answers(Request $request){

        $request->validate([
            'gender'=>'required',

        ]);



        //Modificar la edad userz_tests
        //1 Obtener el userzs_id
        $userzs_id = DB::table('userzs')
            ->select('id')
            ->where('email',$request->useremail)
            ->get();
        $idUserzs = $userzs_id[0]->id;

        //Primero es crear el userzs
        $user = App\Userz::findOrFail($idUserzs);
        $user->gender = $request->gender;
        $user->save();

        //2 Obtener id del userzs_tests, donde se tenga en cuenta el id del test y el id de userz
        $Userzs_test = DB::table('userz_tests')
            ->select('id')
            ->where('tests_id',$request->idTest)
            ->where('userzs_id',$idUserzs)
            ->get();
        $idUserzs_test = $Userzs_test[0]->id;


        $userz_tests = App\Userz_test::findOrFail($idUserzs_test);
        if($userz_tests->participationdate == null){
            echo "no se ha respondido la encuesta<br>";

            date_default_timezone_set("America/Bogota");
            $date = date('Y-m-d H:i:s');

            $deadline =strtotime($userz_tests->deadline." 23:59:00");
            $hoy =strtotime($date);

            echo $hoy.$date."<br>".$deadline;
            if($hoy > $deadline){
                return back()->with('mensaje','Su fecha límite ('.$deadline.' 23:59:00) para responder el cuestionario ya ha expedido');

            }else{
                echo "ya se puede guardar la encuesta";
                //Permitir que se agregue el registro
                $userz_tests->age = $request->birthdate;
                $userz_tests->participationdate = date("Y-m-d");
                $userz_tests->save();
            }

        }
        else{
            echo "Ya se ha guardado la encuesta";
            return back()->with('mensaje','Usted ya ha llenado el formulario!');
        }

        //Validar si userz_test ya tiene una fecha de participacion, si tiene, entonces no se puede llenar un nuevo registro
        //Validar la fecha deadline y la fecha actual,

           $long = sizeof($request->all());
          $long = $long -1;
           $i = 0;
          foreach ($request->all() as $item => $value){
              if($i>4 && $i<$long){
                  //echo $item.": ".$value."<br>";
                  $codigoPregunta = explode('=',$item);
                  //echo "Codigo: ".$codigoPregunta[1]." Value: ".$value."<br>";
                  $answer = new App\Answer;
                  $answer->userz_tests_id = $idUserzs_test;
                  $answer->questions_id = $codigoPregunta[1];
                  $answer->description = $value;
                  $answer->save();

              }
              $i++;

          }

        return back()->with('mensaje','respuestas enviadas!');


    }

}




?>
