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
        $this->middleware('auth');
    }

    public function index()
    {
        return view('encuestasus');
    }
 
    public function show($id = 1)
    {
        $sus = App\Test::findOrFail($id);
        return view('encuestasus', compact('sus'));
    }

}




?>