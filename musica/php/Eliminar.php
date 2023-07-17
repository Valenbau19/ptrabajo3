
<?php

include("../includes/conexion.php");

$Id =$_POST['id'];

$sql="DELETE FROM canciones where Id='$Id'";

if (mysqli_query($conex, $sql)){
    echo "Registro actualizado con exito";
} else {
    echo "Error al actualizar".mysqli_error($conex);
}

mysqli_close($conex);

?>