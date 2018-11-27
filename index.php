<?php

require_once("db.php");

$dbConfig = array();

$dbConfig["DB"]["HOST"] = "localhost";
$dbConfig["DB"]["USER"] = "root";
$dbConfig["DB"]["PWD"] = "";
$dbConfig["DB"]["NAME"] = "test";

$conn_id = opendb();

$outcome = array();

try {

    $sql = "SELECT *
            FROM users";
    
    $qres = query($sql);


    while ($d = mysql_fetch_assoc($qres)) {
        $outcome[] = $d;
    }

    var_dump($outcome);

} catch (Exception $e) {
    echo $e;
}

closedb($conn_id);