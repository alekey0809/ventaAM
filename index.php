<?php  
session_start();

require_once 'config/db.php';
require_once 'config/parameters.php';
require_once '';

function show_error(){
    $error = new errorController();
    $error->index();
}

if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';

}elseif (!isset($_GET['controller'] && !isset($_GET['action']))){
    $nombre_controlador = controller_default;
}else{
    show_error();
    exit();
}