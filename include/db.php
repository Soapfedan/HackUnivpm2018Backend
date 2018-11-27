<?php

$dbConfig = array();

$dbConfig["HOST"] = "localhost";
$dbConfig["USER"] = "root";
$dbConfig["PWD"] = "";
$dbConfig["NAME"] = "test";

function opendb() {



	$conn = mysqli_connect($dbConfig["HOST"],$dbConfig["USER"],$dbConfig["PWD"],$dbConfig["NAME"]);
	mysqli_set_charset($conn,'utf8');
	
	return $conn;
	
}

function query($conn,$sql){
	

    $qres = $conn->query($sql);
	return $qres;
	
}


function closedb($conn) {
	
	mysqli_close($conn);
	
}

?>