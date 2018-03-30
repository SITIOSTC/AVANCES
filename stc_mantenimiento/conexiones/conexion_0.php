<?php
$link = mysqli_connect("127.0.0.1", "root", "gears_of-war-3");

		mysqli_select_db($link, "bd_stc_pcl");

		$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

?>