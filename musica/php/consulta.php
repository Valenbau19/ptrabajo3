<?php

include("../includes/conexion.php");

$sql = "SELECT * FROM canciones";
$result = mysqli_query($conex, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)){
    echo $row["id"]." ".$row["nombre"]." ".$row["genero"]." ".$row["artista"]." ".$row["año"]."<br>";}
} else {
    echo "La tabla no contiene registros";}

mysqli_close($conex);

?>