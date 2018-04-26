<?php
	
	$file = $_POST['id_manual'];
	
	if(is_file($file)){
		chmod($file,0777);
		if(!unlink($file)){
		echo false;
		}
	}
	
?>