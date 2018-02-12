<?php

class Conexion extends mysqli{

	public function __construct(){
		parent::__construct('127.0.0.1','root','gears_of-war-3','bd_stc_pcl','3306');
		$this->query("SET NAMES 'utf8';");
		$this->connect_errno ? die('Error con la conexion') : $x = 'Conectado';
		//echo $x,'<br/>';
		unset($x);
	}

	public function recorrer ($y){
		return mysqli_fetch_array($y);
	}

	public function rows ($y){
		return mysqli_num_rows($y);
	}
}
?>