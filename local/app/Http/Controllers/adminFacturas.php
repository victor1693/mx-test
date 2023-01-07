<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use View;

class adminFacturas extends Controller
{	
	private $facturas;
	function __construct()
	{
		$this->facturas = new facturasClass();
	}

	public function index()
	{
		$vista = View::make("adminFacturas");
		$vista->facturas = $this->facturas->getFacturas();
		return $vista; 
	}

	public function factura($id)
	{
		$this->facturas->token = $id;
		$vista = View::make("adminFactura");
		$vista->facturas = $this->facturas->getFactura();
		$vista->id = $id;
		return $vista; 
	}
}
