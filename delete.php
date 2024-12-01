<?php

include('db.php');

$id = $_GET['id'];

/* Consulta de la base de datos */
$query ="DELETE FROM usuarios WHERE id='$id'";
if($conn->query($query)==TRUE){
    header('Location: index.php');
}else {
    echo "Error de consulta";
}


?>