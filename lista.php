<?php

$conexion= mysqli_connect('localhost', 'root', '', 'bis');
$consulta = 'select * from usuarios where cargo="2"';
$resultado = mysqli_query($conexion,$consulta);
$tabla =<<<FIN
<table>
<tr><th>Nombre</th><th>Email</th><th>Clave</th><th>Cargo</th><th colspan="2">Accion</th></tr>
FIN;

while($registro=mysqli_fetch_assoc($resultado)){
$tabla.='<tr>';
$tabla.="<td>{$registro['nombre']}</td>";
$tabla.="<td>{$registro['email']}</td>";
$tabla.="<td>{$registro['clave']}</td>";
$tabla.="<td>{$registro['cargo']}</td>";

$tabla.="<td><a href=borrar.php?id={$registro['id']}>Borrar</a></td>";

$tabla.='</tr>';
}
$tabla.='</table>';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/estilos.css">
<title>lista</title>
</head>
<body>
<div class="contenedor">


<div class="logo-title">
<img src="img/descarga.jpg" alt="">

<div class="cabecera">Lista de usuarios</div>
</div>




<div class="contenido">
<div class="tabla">
<?php echo $tabla; ?>
<p>

</p>
</div>


</div>
</div>
</body>
</html>