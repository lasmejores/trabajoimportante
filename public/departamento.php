

<?php 
        

    include 'conexion1.php';
    
    $query=mysqli_query($mysqli,"SELECT coddepto, nomdepto FROM t_depto");
    
    if(isset($_POST['1']))
    {
        $estado=$_POST['1'];
        echo $estado;
    }

    
 

    
?>




