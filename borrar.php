<?php
$id = !empty($_GET['id']) ? $_GET['id'] : 0;
if($id){
$conexion= mysqli_connect('localhost', 'root', '', 'bis');
$consulta = "delete from usuarios where id=$id";
if(!mysqli_query($conexion,$consulta)){
die('No se pudo eliminar el registro');
}
}
header('Location: lista.php');