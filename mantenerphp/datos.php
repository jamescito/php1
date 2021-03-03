<?php
session_start();
$nombres = array();
echo $_POST['nombre'];
if(isset($_POST['nombre']))
{
    if(isset($_SESSION['nombres'])){
         $nombres = $_SESSION['nombres'];
         $nombres[] = $_POST['nombre'];
         $_SESSION['nombres'] = $nombres;
     } else {
        
        $nombres[] = $_POST['nombre'];
        $_SESSION['nombres'] = $nombres;
        
     }
}
$valores = $_SESSION["nombres"];
foreach($valores as $val)
{
    echo $val."<br>" ;
} 
?>
