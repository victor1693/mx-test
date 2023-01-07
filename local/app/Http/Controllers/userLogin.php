<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class userLogin extends Controller
{
	public $user;

	function __construct()
	{
		$this->user = new usuariosClass();
	}
 
	# RETORNA LA VISTA DE LOGIN
    public function index()
    {
    	$vista = View::make('userLogin');
    	return $vista;
    }

    # INICIO DE SESION
    public function login()
    { 
    	$this->user->email = $_POST['login-email'];
    	$this->user->password = $_POST['login-password'];

    	$r = $this->user->getUser();

    	if(count($r['result'])==0){
    		return Redirect('user-login')->with('error','Su usuario y clave son inválidos.');
    	}

        session()->put('u-email',$r['result'][0]->email);
        session()->put('u-nombre',$r['result'][0]->nombre);
        session()->put('u-apellido',$r['result'][0]->apellido); 

    	 
    	# REDIRIGIR AL DASHBOARD DE CLIENTE

        return Redirect('user-dashboard');
    }


    # CERRAR DE SESION
    public function cerrarSession()
    { 
         session()->forget('u-email');
         session()->forget('u-nombre');  
         session()->forget('u-apellido');  
         return Redirect('user-login');
    }

}
