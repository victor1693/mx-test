<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
class adminClass extends Controller
{ 
	public $email;
	public $clave;  

    public function getUser()
    { 
    	try {
    		$sql = "SELECT * FROM tbl_admin WHERE email = '".$this->email."' AND password = '".md5($this->password)."'";    		 
    		$result = DB::select($sql); 
    		$r = array('status' => true, 'result' => $result);
    		return $r;    		
    	} catch (\Illuminate\Database\QueryException $ex) {
    		$r =array('status' => false, 'result' => []);
    		return $r;     		
    	}
    }
}
