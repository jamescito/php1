<?php
$name=$_POST["usuario"];
$correo=$_POST["correo"];
$date=$_POST["date"];

$an=$date[0];
$an1=$date[1];
$an2=$date[2];
$an3=$date[3];

$anio_actual=2021;

$fechanacimiento=( $an .$an1 . $an2 . $an3);

$datet =$anio_actual-$fechanacimiento;
if ($datet>=18) {
echo("Eres mayor de edad: ". $datet);    
}
else{
    echo("Eres menor de edad: ". $datet);
}
?>