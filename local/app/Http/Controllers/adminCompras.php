<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class adminCompras extends Controller
{
    private $compras;
    private $facturas;

    function __construct()
    {
    	$this->compras = new comprasClass();
    	$this->facturas = new facturasClass();
    }

    public function index()
    {	

    	 $vista = View::make('adminCompras');
    	 $vista->compras = $this->compras->getCompras();
    	 return $vista;
    }

    public function procesarFacturas()
    {
    	 $this->facturas->procesarFacturas();
    	 return Redirect('facturas');
    }
}
