<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
class comprasClass extends Controller
{
    public $producto;
    public $cliente;
    
    # REGISTRAMOS UNA COMPRA
    public function comprar()
    {
    	try {
            $token = Str::uuid();

    		$sql = "INSERT INTO tbl_compras (token,cliente,producto,status) VALUES";
            $values = "";
            foreach ($this->producto as $key) {
               $values = $values. " ('".$token."','".$this->cliente."','".$key."','pendiente'),";
            }
    		$values = $values . "end";
            $values = str_replace(",end"," ",$values);
            $sql = $sql.$values; 

    		DB::insert($sql); 
    		$r = array('status' => true, 'result' => []);
    		return $r;    		
    	} catch (\Illuminate\Database\QueryException $ex) {
    		$r =array('status' => false, 'result' => []);
    		return $r;     		
    	}
    }

    # REGISTRAMOS UNA COMPRA
    public function getCompras()
    {
        try {
            $sql = "SELECT t2.nombre,t1.status,t1.cliente,t1.created,count(t1.token) as total 
                    FROM `tbl_compras` t1 
                    INNER JOIN tbl_productos t2 ON t2.id = t1.producto GROUP BY t1.token;";
             
            $result = DB::select($sql); 
            $r = array('status' => true, 'result' => $result );
            return $r;          
        } catch (\Illuminate\Database\QueryException $ex) {
            $r =array('status' => false, 'result' => []);
            return $r;          
        }
    }

    # OBTENEMOS EL NUMERO TOTAL DE COMPRAS CUANDO AUN NO SE HA PROCESADO COMO FACTURA
    public function getTotal()
    {
        try {
            $sql = "SELECT count(*) AS total FROM tbl_compras "; 
            $result = DB::select($sql); 
            $r = array('status' => true, 'result' => $result);
            return $r;          
        } catch (\Illuminate\Database\QueryException $ex) {
            $r =array('status' => false, 'result' => []);
            return $r;          
        }
    }

     
}
