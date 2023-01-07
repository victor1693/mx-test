<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class adminLogin extends Controller
{
    public $admin;
 
	function __construct()
	{
		$this->admin = new adminClass();
	}

	# RETORNA LA VISTA DE LOGIN DEL ADMINISTRADOR
    public function index()
    {
    	$vista = View::make('adminLogin');
    	return $vista;
    }

    # INICIA LA SESION DEL ADMINISTRADOR
    public function login()
    { 
    	$this->admin->email = $_POST['login-email'];
    	$this->admin->password = $_POST['login-password'];

    	$r = $this->admin->getUser();

    	if(count($r['result'])==0){
    		return Redirect('admin-login')->with('error','Su usuario y clave son inválidos.');
    	}

    	session()->put('a-email',$r['result'][0]->email);
        session()->put('a-nombre',$r['result'][0]->nombre);
        session()->put('a-apellido',$r['result'][0]->apellido); 
         
        # REDIRIGIR AL DASHBOARD DE CLIENTE

        return Redirect('dashboard');
    	# REDIRIGIR AL DASHBOARD DEL ADMINISTARDOR
    }

    # CERRAR DE SESION
    public function cerrarSession()
    { 
         session()->forget('a-email');
         session()->forget('a-nombre');  
         session()->forget('a-apellido');
           
         return Redirect('user-login');
    }
}
