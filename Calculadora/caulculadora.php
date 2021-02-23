<?php
$numero=$_POST["numero"];
$numero2=$_POST["numero2"];


$opciones=$_POST["rad"];


if ($opciones==1) {
    $s=$numero+$numero2;
echo("La suma es: ". $s);

}
        
else if($opciones==2) 
{
           $r=$numero-$numero2;
           echo("La resta es: ". $r);
}

else if($opciones==3)
{
                     
            if($numero2==0){
                echo("No se puede dividir entre cero ");

            }           
            else {
                $d=$numero/$numero2;
               echo("la division es: ". $d);

            }
}

elseif ($opciones==4) {
    $m= $numero*$numero2;
    echo("la multiplicación es: ". $m);
}

else
{

}

?>