<?php

function get($link,$op,$input){

    switch($op){
        case "login":
            //DO SOMETHING
            break;
        default: //DEVO FARE UNA GET SU UNA CERTA TABELLA
            $mainTable = $op;
            $join = base64_decode($input["join"]);
            $where = base64_decode($input["where"]);

            $sql = "select * from `$mainTable`".($entry?" $entry":'');
            break;
                
    }
   

    // excecute SQL statement
    $result = mysqli_query($link,$sql);

    return $result;
}