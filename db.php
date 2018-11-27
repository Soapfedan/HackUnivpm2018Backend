<?php

function opendb() {

	global $dbConfig;

	$id = mysql_connect($dbConfig["DB"]["HOST"],$dbConfig["DB"]["USER"],$dbConfig["DB"]["PWD"]);
	
	return $id;
	
}

function query($sql){
	

    $qres = mysql_query($sql);
	return $qres;
	
}


function closedb($conn_id) {
	
	mysql_close( $conn_id );
	
}

?>