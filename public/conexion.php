<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=login1', 'root', '');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>