<?php
 function obtenerProductos($cantidad = 10){
     include 'conexion.php';

     try{
        $sql = "SELECT * FROM productos LIMIT $cantidad";
        return $resultado = $bd->query($sql);
     } catch(Exception $e){
         echo $e->getMessage();
         return array(); 
     }
 }
//Muestra un solo producto
function obtenerProducto($id_producto){
    include 'conexion.php';

    try{
        $sql = "SELECT nombre, imagen_completa, precio, descripcion, descripcion_corta FROM `productos` WHERE id = $id_producto";
        $resultado = $bd->query($sql);
    } catch(Exception $e){
        echo $e->getMessage();
        return array();
    }
    return $resultado;
}
?>