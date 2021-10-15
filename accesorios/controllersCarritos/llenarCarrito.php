<?php

require "../includes/funciones/app.php";


use App\ProductoCarrito;

$idCarrito = NULL;
session_start();


// Verifica si existe carrito y sino lo crea

if(!isset($_SESSION["id_usuario"])){


    if(isset($_SESSION["idCarrito"])){

        $idCarrito = $_SESSION["idCarrito"];

    }else{

        $idCarrito = ProductoCarrito::creandoCarrito();
        $_SESSION["idCarrito"] = $idCarrito;

    }

}else{

    $id_usuario = $_SESSION["id_usuario"];
    $idCarrito = ProductoCarrito::obtenerIdCarrito($id_usuario);

}
// Obtienes los productos del carrito

$productos = ProductoCarrito::obtenerProductosCarrito($idCarrito);

session_write_close();
echo json_encode($productos);

//echo $idCarrito;
