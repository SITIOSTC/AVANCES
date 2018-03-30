<?php
/*$mysql = new mysqli('127.0.0.1','root','gears_of-war-3','bd_stc_pcl');

if ($mysql->connect_errno):
	echo "error al conectarse a la BD: ".$mysql->connect_errno;
endif;*/

	$mysqli = new MySQLi("127.0.0.1", "root","gears_of-war-3", "bd_stc_pcl");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
			//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"bd_stc_pcl");
//	}
?>