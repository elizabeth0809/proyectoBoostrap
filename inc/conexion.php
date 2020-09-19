<?php
    try{
        $bd = new mysqli('localhost', 'root', '', 'elizz_restaurant');
    }catch(Exception $e){
        echo $e->getMessage();
        exit;
    }
/*if($bd->ping()){
    echo 'Todo Bien';
} else{
    echo $bd->connect_error;
} la manera para verificar la conexion*/
?>