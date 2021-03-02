<?php
$nombre= $_POST["nombre"];
$numero=$_POST["numero"];

//echo("Mi nombre es: ". $nombre);
echo("<br>");

?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table id="tabla_datos" border="1" width="20%">
        <tr> 
            <td>Nombre</td>
        </tr>
<tbody>
    
<?php

for ($i=0; $i <=$numero ; $i++)
 { ?>
     
     <tr style="height: 20px;">
        <th><?php echo($nombre)?></th>
    </tr>
    <?php
}
?>

    
</tbody>

     
    </table>

    
    

</body>
</html>