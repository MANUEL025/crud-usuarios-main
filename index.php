<?php 
$controller = isset($_GET['c']) ?  $_GET['c'] : 'Dashboard';
$controller= $controller.'Controller';

$method = isset($_GET['m']) ? $_GET['m'] : 'dashboard';
require_once('./controllers/'.$controller.'.php');
$obj= new $controller();
$obj->$method();
