<?php

function opendb() {

	global $dbConfig;

	$conn = new mysqli($dbConfig["DB"]["HOST"],$dbConfig["DB"]["USER"],$dbConfig["DB"]["PWD"],$dbConfig["DB"]["NAME"]);
	
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