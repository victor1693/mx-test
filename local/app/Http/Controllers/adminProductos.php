<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class adminProductos extends Controller
{
    private $producto;

    function __construct()
    {
    	$this->producto = new productosClass();
    }

    public function index()
    {
    	 $vista = View::make('adminProductos');
    	 $vista->productos = $this->producto->getProductos();
    	 return $vista;
    }

    public function create()
    {
    	$this->producto->nombre = $_POST['nombre'];
		$this->producto->costo = $_POST['costo'];
		$this->producto->venta = $_POST['venta'];
		$this->producto->existencia = $_POST['existencia'];
		$this->producto->impuesto = $_POST['impuesto'];
		$r = $this->producto->create();

		if($r['status']==false){
    		return Redirect('user-login')->with('error','Ocurrió un error al procesar el registro.');
    	}
    	return Redirect()->back();
    }

}
