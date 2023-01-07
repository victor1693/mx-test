<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;

class productosClass extends Controller
{
	public $nombre;
	public $costo;
	public $venta;
	public $existencia;
	public $impuesto;

    # REGISTRAMOS UN PRODUCTO
    public function create()
    {
    	try {
    		$sql = "INSERT INTO tbl_productos (nombre,costo,venta,token,existencia,impuesto) 
    				VALUES ('".$this->nombre."',
    						'".$this->costo."',
    						'".$this->venta."',
    						'".Str::uuid()."',
    						'".$this->existencia."',
    						'".$this->impuesto."'
    					)";
    		 
    		DB::insert($sql); 
    		$r = array('status' => true, 'result' => []);
    		return $r;    		
    	} catch (\Illuminate\Database\QueryException $ex) {
    		$r =array('status' => false, 'result' => []);
    		return $r;     		
    	}
    }

    # OBETENEMOS EL LISTADO DE PRODUCTOS
    public function getProductos()
    {
    	try {
    		$sql = "SELECT * FROM tbl_productos";    		 
    		$result = DB::select($sql); 
    		$r = array('status' => true, 'result' => $result);
    		return $r;    		
    	} catch (\Illuminate\Database\QueryException $ex) {
    		$r =array('status' => false, 'result' => []);
    		return $r;     		
    	}
    }

    # OBTENEMOS EL NUMERO TOTAL DE PRODUCTOS
    public function getTotal()
    {
        try {
            $sql = "SELECT count(*) AS total FROM tbl_productos"; 
            $result = DB::select($sql); 
            $r = array('status' => true, 'result' => $result);
            return $r;          
        } catch (\Illuminate\Database\QueryException $ex) {
            $r =array('status' => false, 'result' => []);
            return $r;          
        }
    }
}
