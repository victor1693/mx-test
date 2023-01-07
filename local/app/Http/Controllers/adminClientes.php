<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class adminClientes extends Controller
{

	private $usuario;

	function __construct()
	{
		$this->usuario = new usuariosClass();
	}

    public function index()
    {
    	 $vista = View::make('adminClientes');
    	 $vista->clientes = $this->usuario->getUsers();
    	 return $vista;
    }

}
