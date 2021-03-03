<?php
///////////////////////////////////////
session_start();
$nombres = array();
require("conexion.php");
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
echo("Lista de los usuarios");
echo ("<br>") ;
$valores = $_SESSION["nombres"];
foreach($valores as $val)
{
    echo $val."<br>" ;
} 


///////////////////////////////////////////////////////////////////////////////////////
require_once('clase.class.php');

$persona = new Persona();
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$edad=$_POST["edad"];
$sexo=$_POST["sexo"];
$direccion=$_POST["Dirección"];


 $persona->setnombre($nombre);
 $persona->setapellido($apellido);
 $persona->setedad($edad);
 $persona->setsexo($sexo);
 $persona->setdireccion($direccion);

$array[] = array("datos"=> array('nombre :'=>$persona->getnombre(),'apellido :'=>$persona->getapellido(), 'edad :'=>$persona->getEdad(),'sexo :'=>$persona->getsexo(),'direccion :'=>$persona->getdireccion()));

$JSON=json_encode($array);
$datos='dato.json';
file_put_contents($datos,$JSON, FILE_APPEND | LOCK_EX);

$query = <<<SQL
INSERT INTO Usuarios (nombre,Apellido,edad,sexo,direccion)
VALUES (:nombre,:Apellido,:edad,:sexo,:direccion)
SQL;
$statement = $db->prepare($query);
$params = [
    'nombre' => $persona->getnombre(),
    'Apellido' => $persona->getapellido(),
    'edad' => $persona->getEdad(),
    'sexo' => $persona->getsexo(),
    'direccion' => $persona->getdireccion(),
];
$statement->execute($params);


echo("Ultimo usuario registrado");
echo("<br>");
echo(end($valores));

?>