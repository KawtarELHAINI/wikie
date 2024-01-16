<?php

require_once("../model/HomeModel.php");
require_once("../service/HomeService.php");

$homeservice = new HomeService;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
   
}
$homeservice = $HomeService->display();



?>