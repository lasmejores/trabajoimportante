<?php
// Se prendio esta mrd :v
session_start();

// Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
/*
Para redireccionar en php se utiliza header,
pero al ser datos enviados por cabereza debe ejecutarse
antes de mostrar cualquier informacion en el DOM es por eso que inserto este
codigo antes de la estructura del html, espero haber sido claro
*/
header('location: index.php');
}


?>
<?php
require  'frente.php'

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
<!-- Styles -->
<style>
html, body {
background-color: #fff;
color: #636b6f;
font-family: 'Nunito', sans-serif;
font-weight: 200;
height: 100vh;
margin: 0;
}

.full-height {
height: 30vh;
}

.flex-center {
align-items: center;
display: flex;
justify-content: center;
}

.position-ref {
position: relative;
}

.top-right {
position: absolute;
right: 10px;
top: 18px;
}

.content {
text-align: center;
}

.title {
font-size: 84px;
}

.links > a {
color: #636b6f;
padding: 0 25px;
font-size: 13px;
font-weight: 600;
letter-spacing: .1rem;
text-decoration: none;
text-transform: uppercase;
}

.m-b-md {
margin-bottom: 30px;
}
</style>

</head>

<body>


<div class="flex-center position-ref full-height">
<div class="top-center links">






</div>

</div>
<div class="flex-center position-ref full-height">
<div class="top-center links">



Bienvenido Sea Usted <?php echo ucfirst($_SESSION['nombre']); ?>

</div>





</div>
</body>
</html>
