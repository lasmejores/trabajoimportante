<?php
    include 'conexion1.php';
    include 'departamento.php';
    include 'provincias.php';
   

?>



<html>
    <head>
        <title>
            Ejemplo
        </title>
    </head>
    <body >



<form >


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
<select name="1">
</select>
</p>
</div>
</th>

<th align="left" valign="top">
<div class="row">
<div class="col-md-4">
<p>Seleccione Provincias
<select name="2"  >
<?php 
while($datos = mysqli_fetch_array($query))
{
?>
<option value="<?php echo  $datos['codprovi']?>">  <?php echo $datos['nomprovi']?>   </option>
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