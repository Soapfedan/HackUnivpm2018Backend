<?php


require_once("./include/db.php");
require_once("./method/get.php");
require_once("./method/post.php");
require_once("./method/put.php");


// get the HTTP method, path and body of the request
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('?', trim($_SERVER['PATH_INFO'],'&'));
$input = json_decode(file_get_contents('php://input'),true);

var_dump($input);
 
// connect to the mysql database
$link = opendb();

$op = $request[0];





/* $entry = base64_decode($request[1]); */


$result;

switch ($method) {
  case 'GET':
    $result = get($link,$op,$input); break;
 /*  case 'PUT':
    $sql = "update `$table` $entry"; break;
  case 'POST':
    $sql = "insert into `$table` values $entry"; break;
  case 'DELETE':
     $sql = "delete `$table` where id=$entry";  $sql =""; break; */
}
 

 
// die if SQL statement failed
if (!$result) {
  http_response_code(404);
  die(mysqli_error());
}
 
output($link,$method,$result);
 
// close mysql connection
closedb($link);