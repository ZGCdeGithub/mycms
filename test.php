<?php 
	require_once "./includes/DB.class.php";

	$db1=DB::getDB();
	var_dump($db1);
	
	echo '<br/>';
	$db2=DB::getDB();
	var_dump($db2);

   
?>
