<?php

$contraseña = "FlXDYssOpp2wZBy8NHyg";
$usuario= "postgres";
$nombreBaseDeDatos="railway";

$rutaServidor ="containers-us-west-119.railway.app";
$puerto="5847";
try{
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (Exception $e){
    echo "Ocurrio un error con la base de datos:" . $e->getMessage();
}
 