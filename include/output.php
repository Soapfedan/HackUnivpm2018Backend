<?php

function output($link,$method,$result){

    // print results, insert id or affected row count
    if ($method == 'GET') {
        echo '[';
        for ($i=0;$i<mysqli_num_rows($result);$i++) {
        echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
        }
        echo ']';
    } elseif ($method == 'POST') {
        echo mysqli_insert_id($link);
    } else {
        echo mysqli_affected_rows($link);
    }


}