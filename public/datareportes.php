<?php 

require_once 'conexion1.php';

$query = $mysqli -> query  ("SELECT coddepto,nomdepto FROM sqlmain");
                    
while ($valores = mysqli_fetch_array($query)) 
{    
                   
  echo '<option value="'.$valores[coddepto].'">'.$valores[nomdepto].'</option>';
}

?>