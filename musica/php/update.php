<?php

include("../includes/conexion.php");

$Id = $_POST["num"];
$Nombre = $_POST["nom"];
$Artista = $_POST["art"];
$Genero = $_POST["gen"];
$Año = $_POST["ano"];

$sql = "UPDATE canciones SET nombre='$Nombre', artista='$Artista', 
genero='$Genero', año= '$Año' where id= $Id ";

if (mysqli_query($conex, $sql)){
    echo "Registro actualizado con exito";
}else{
    echo "Error al actualizar".mysqli_error($conex);
}

mysqli_close($conex);

?>