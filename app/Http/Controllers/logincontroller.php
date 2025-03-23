<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;
use Session;
use Hash;


class logincontroller extends Controller
{
    public function login(){
        return view('login');
    }

    public function validar(Request $request){

        //dd($request->all());
        $this -> validate($request,[

            'inputEmail' => 'required',
            'inputPassword' => 'required',

        ]);
        // $paswordEncriptado = Hash::make($request->pasw); //Encriptar lo que recibimos del request*/
        // echo $paswordEncriptado;
        $consulta = Resident::where('email',$request->inputEmail)
        ->get();
        $cuantos = count($consulta);
        if($cuantos == 1 and Hash::check($request->inputPassword,$consulta[0]->password)){

            Session::put('sessionusuario',$consulta[0]->name);
            Session::put('sessiontipo',$consulta[0]->type_resident_id);
            Session::put('sessionid',$consulta[0]->resident_id);

            if($consulta[0]->type_resident_id == 1){
                return view('index');
            }
            else{
                return view('visitantes_residentes');
            }

        }
        else{
 
            Session::flash('mensaje', "El usuario o la contraseña no son correctos"); #Sirve solo una vez
            return redirect()->route('login');           

        }

    }

    public function principal(){

        $sessionid = session('sessionid');
        if($sessionid != ""){

            if(session('sessiontipo') == 1){
                return view('index');
            }
            else{
                return view('visitantes_residentes');
            }

        }
        else{
            Session::flash('mensaje', "Favor de loguearse, antes de continuar"); #Sirve solo una vez
            return redirect()->route('login');
        }
    }

    public function cerrarsesion(){
        Session::forget('sessionusuario'); //elimina el contenido de la sesion usuario
        Session::forget('sessiontipo');
        Session::forget('sessionid');
        Session::flush();
        Session::flash('mensaje', "Sesion cerrada correctamente"); #Sirve solo una vez
        return redirect()->route('login');  

    }
}
