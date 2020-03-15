<?php

include 'conexion1.php'
$query=mysqli_query($mysqli,"SELECT coddepto, nomdepto FROM t_depto");
    


if(isset($_POST['estado'])){
    $estado=$_POST['estado'];
    echo $estado;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo</title>
</head>
<body >



<form  method="post" action="reportestabla.php" >

<table style="float: right;" >
<th>
<a href="atras.html" id="atras" class="boton boton-atras" >Procesar</a>
</th>
</table>
<table>
<a href="principal-vista.php">Pagina de inicio</a>






      
            
       
    














<th align="left" valign="top">
<div class="row">
<div class="col-md-4">
<p>Seleccione base de datos
<select id="lista_departamento" name="lista_departamento" class="form-control">
</select>
</p>
</div>
</th>
</table>







       













            
<table width="97%"  style="margin: 0 auto;background-color:red;" border="0">







<th align="left" valign="top">
<div class="row">
<div class="col-md-4">
<p>Seleccione Año
<select id="lista_departamento" name="lista_departamento" class="form-control">
</select>
</p>
</div>
</th>


<th align="left" valign="top">
<div class="row">
<div class="col-md-4">
<p>Seleccione Mes
<select id="lista_departamento" name="lista_departamento" class="form-control">
</select>
</p>
</div>
</th>


<th align="left" valign="top">
<div class="row">
<div class="col-md-4">
<p>Seleccione Indicador
<select id="lista_departamento" name="lista_departamento" class="form-control">
</select>
</p>
</div>
</th>




<th align="left" valign="top">
<div class="row">
<div class="col-md-4">
<p>Seleccione edad
<select id="lista_departamento" name="lista_departamento" class="form-control">
</select>
</p>
</div>
</th>







</table>







<table width="97%" style="margin: 0 auto;" >


<th align="left" valign="top">
<div class="row">
<div class="col-md-4">
<p>Seleccione grupo
<select id="lista_departamento" name="lista_departamento" class="form-control">
</select>
</p>
</div>
</th>
                   



<th align="left" valign="top">
<div class="row">
<div class="col-md-4">
<p>Seleccione Departamento
<select name="estado">
                    <?php 
                        while($datos = mysqli_fetch_array($query))
                        {
                    ?>
                            <option value="<?php echo $datos['coddepto']?>"> <?php echo $datos['nomdepto']?> </option>
                    <?php
                        }
                    ?> 
                    </select>
</p>
</div>
</th>

<th align="left" valign="top">
<div class="row">
<div class="col-md-4">
<p>Seleccione Provincias
<select id="lista_departamento" name="lista_departamento" class="form-control>
</select>
</p>
</div>
</th>


<th align="left" valign="top">
<div class="row">
<div class="col-md-4">
<p>Seleccione  municipios
<select id="lista_departamento" name="lista_departamento" class="form-control">
</select>
</p>
</div>
</th>


<th align="left" valign="top">
<div class="row">
<div class="col-md-4">
<p>Seleccione  establecimiento
<select id="lista_departamento" name="lista_departamento" class="form-control">
</select>
</p>
</div>
</th>

<th align="left" valign="top">
<div class="row">
<div class="col-md-4">
<p>Seleccione  Tipo
<select id="lista_departamento" name="lista_departamento" class="form-control">
</select>
</p>
</div>
</th>

<th align="left" valign="top">
<div class="row">
<div class="col-md-4">
<p>Seleccione  Subsector
<select id="lista_departamento" name="lista_departamento" class="form-control">
</select>
</p>
</div>
</th>











                
</table>
                

</form>
</body>
</html>