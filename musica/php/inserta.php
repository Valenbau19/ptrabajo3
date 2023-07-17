<?php
include("../includes/conexion.php");

$id=$_POST["num"];
$nombre=$_POST["nom"];
$artista=$_POST["art"];
$genero=$_POST["gen"];
$ano=$_POST["ano"];



$sql = "INSERT INTO canciones VALUES ('$id', '$nombre ', '$artista', '$genero', '$ano')";

if (mysqli_query($conex, $sql)) {
    echo "Cancion adicionada";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conex);
}

mysqli_close($conex);

?>