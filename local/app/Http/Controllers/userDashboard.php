<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class userDashboard extends Controller
{
    private $producto;
    private $compras;

    function __construct()
    {
    	$this->producto = new productosClass();
        $this->compras = new comprasClass();
    }

    public function index()
    {
    	 $vista = View::make('userProductos');
    	 $vista->productos = $this->producto->getProductos();
    	 return $vista;
    } 

    public function comprar()
    {
        

        $this->compras->producto = $_POST['productos'];
        $this->compras->cliente = session()->get('u-email');
        $r = $this->compras->comprar();

        if($r['status'] == false){
            return Redirect()->back()->with('error','Ocurrio un error al procesar su compra');
        }

        return Redirect()->back()->with('success','Su compra ha sido procesada con exito.');
    }
}
