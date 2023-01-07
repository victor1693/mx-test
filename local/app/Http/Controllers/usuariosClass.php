<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
class usuariosClass extends Controller
{

	public $nombre;
	public $apellido;
	public $email;
	public $clave; 

    #CREAMOS UN NUEVO USUARIO
    public function create()
    { 
    	try {
    		$sql = "INSERT INTO tbl_usuarios (nombre,apellido,email,token,password) 
    				VALUES ('".$this->nombre."',
    						'".$this->apellido."',
    						'".$this->email."',
    						'".Str::uuid()."',
    						'".md5($this->password)."')";
    		 
    		DB::insert($sql); 
    		$r = array('status' => true, 'result' => []);
    		return $r;    		
    	} catch (\Illuminate\Database\QueryException $ex) {
    		$r =array('status' => false, 'result' => []);
    		return $r;     		
    	}
    }

    # OBTENEMOS UN USUARIO VALIDADO POR SU EMAIL Y CLAVE
    public function getUser()
    { 
    	try {
    		$sql = "SELECT * FROM tbl_usuarios WHERE email = '".$this->email."' AND password = '".md5($this->password)."'";    		 
    		$result = DB::select($sql); 
    		$r = array('status' => true, 'result' => $result);
    		return $r;    		
    	} catch (\Illuminate\Database\QueryException $ex) {
    		$r =array('status' => false, 'result' => []);
    		return $r;     		
    	}
    }

    # OBTENEMOS TODOS LOS USUARIOS
    public function getUsers()
    { 
        try {
            $sql = "SELECT * FROM tbl_usuarios ";          
            $result = DB::select($sql); 
            $r = array('status' => true, 'result' => $result);
            return $r;          
        } catch (\Illuminate\Database\QueryException $ex) {
            $r =array('status' => false, 'result' => []);
            return $r;          
        }
    }

    # OBTENEMOS EL NUMERO TOTAL DE CLIENTES
    public function getTotal()
    {
        try {
            $sql = "SELECT count(*) AS total FROM tbl_usuarios"; 
            $result = DB::select($sql); 
            $r = array('status' => true, 'result' => $result);
            return $r;          
        } catch (\Illuminate\Database\QueryException $ex) {
            $r =array('status' => false, 'result' => []);
            return $r;          
        }
    }
}
