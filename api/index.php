<?php
header('Access-Control-Allow-Origin: *');
header("content-type: application/json");
//header("Content-type: application/x-www-form-urlencoded");
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: *");



$_POST = json_decode(file_get_contents('php://input'), true);

//print_r($_POST);
echo json_encode($_POST);

if(isset($_GET['name'])){
    print_r(json_encode($_GET));
}