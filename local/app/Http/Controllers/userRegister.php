<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userRegister extends Controller
{	
	public $user;
	function __construct()
	{
		$this->user = new usuariosClass();
	}

    public function create()
    { 
    	$this->user->email = $_POST['correo'];
    	$this->user->apellido = $_POST['apellido'];
    	$this->user->nombre = $_POST['nombre'];
    	$this->user->password = $_POST['password'];
    	$this->user->create();
    	return Redirect('user-login')->with('success','Su cuenta ha sido creada con exito.');
    	# REDIRIGIR AL DASHBOARD DE CLIENTE
    }
}
