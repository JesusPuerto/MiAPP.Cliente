<?php
/*FRIENDLY-URL*/
$url=explode('/',@$_GET['url']);
$seccion=(!empty($url[0])?$url[0]:'cliente');
$a=(!empty($url[1])?$url[1]:'index');
$args=(!empty($url[2])?$url[2]:null);

if(file_exists("controlador/".$seccion.".controlador.php")){
    include_once("controlador/".$seccion.".controlador.php");
    $controlador=ucwords($seccion)."controlador";
    $controlador=new $controlador;
    if(method_exists($controlador,$a)){
        if($args==null){
            $controlador->{$a}();
        } else {
            $controlador->{$a}($args);
        }
    } else {
        echo "<h1>Error: Acceso a una acción inexistente</h1>";    
    }
    
} else {
    echo "<h1>Error: Acceso a una ruta inexistente</h1>";
}

?>