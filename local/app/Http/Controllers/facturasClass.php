<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class facturasClass extends Controller
{

    public $token;

    # PROCESAMOS LAS FACTURAS
    public function procesarFacturas()
    { 
		try {
			DB::beginTransaction();
    		$sql = "INSERT INTO `tbl_factura` (id_compra,token_compra,sub_total,impuesto,total) 
					SELECT t1.id, t1.token, (t2.venta) as venta,(t2.impuesto) as impuesto,(((t2.impuesto/100) * t2.venta) + t2.venta)  as total 
                    FROM `tbl_compras` t1
                    INNER JOIN tbl_productos t2 ON t2.id = t1.producto
                    WHERE status = 'pendiente'
                    ";

		    DB::insert($sql); 
		    $sql = "UPDATE tbl_compras SET status = 'Facturada'"; 
		    DB::update($sql); 
		    
    		$r = array('status' => true, 'result' => []);
    		DB::commit();
    		return $r;   

    	} catch (\Illuminate\Database\QueryException $ex) {
    		DB::rollback(); 
    		$r =array('status' => false, 'result' => []);
    		return $r;     		
    	} 
    }

    # PROCESAMOS LAS FACTURAS
    public function getFacturas()
    { 
		try {
			 
		    $sql = "SELECT t1.token_compra,sum(t1.sub_total) as sub_total,sum(t1.impuesto) as impuesto,sum(t1.total) as total,cliente 
                    FROM `tbl_factura` t1
                    INNER JOIN (SELECT cliente,token FROM tbl_compras GROUP BY token) t2 
                    ON t2.token = t1.token_compra
                    GROUP BY t1.token_compra ORDER BY t1.created DESC";
					
			$result = DB::select($sql);
    		$r = array('status' => true, 'result' => $result); 
    		return $r;   

    	} catch (\Illuminate\Database\QueryException $ex) { 
    		$r =array('status' => false, 'result' => []);
    		return $r;     		
    	} 
    }

     # PROCESAMOS LAS FACTURAS
    public function getFactura()
    { 
        try {
             
             $sql = "SELECT t1.id, t2.nombre as  producto, t1.cliente,t3.sub_total,t3.impuesto,t3.total FROM `tbl_compras` t1 
                     INNER JOIN tbl_productos t2 ON t2.id = t1.producto
                     INNER JOIN tbl_factura t3 ON t3.id_compra = t1.id
                     WHERE t1.token  = '".$this->token."'";
             
            $result = DB::select($sql);
            $r = array('status' => true, 'result' => $result); 
            return $r;   

        } catch (\Illuminate\Database\QueryException $ex) { 
            $r =array('status' => false, 'result' => []);
            return $r;          
        } 
    }

    # OBTENEMOS EL NUMERO TOTAL DE FACTURAS
    public function getTotal()
    {
        try {
            $sql = "SELECT count(DISTINCT(token_compra)) AS total FROM tbl_factura"; 
            $result = DB::select($sql); 
            $r = array('status' => true, 'result' => $result);
            return $r;          
        } catch (\Illuminate\Database\QueryException $ex) {
            $r =array('status' => false, 'result' => []);
            return $r;          
        }
    }
}
