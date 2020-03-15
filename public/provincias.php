<?php
    include 'conexion1.php';
   
    $query=mysqli_query($mysqli,"SELECT codprovi, nomprovi FROM t_provincia");
    
    if(isset($_POST['2']))
    {
        $estado2=$_POST['2'];
        echo $estado2;
    }
   



