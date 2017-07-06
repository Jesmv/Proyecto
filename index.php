<?php

//Configuración global
require_once 'config/global.php';

//Incluir todos los modelos
require_once 'core/BaseEntity.php';
require_once 'core/ModeloBase.php';
foreach(glob("model/*.php") as $file){
    require_once $file;
}
 
//Base para los controladores
require_once 'core/ControladorBase.php';
 
//Funciones para el controlador frontal
require_once 'core/ControladorFrontal.func.php';

session_start();
 
//Cargamos controladores y acciones
if(isset($_GET["controller"])){
    $controllerObj=cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
} else {
    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
    lanzarAccion($controllerObj);
}

?>