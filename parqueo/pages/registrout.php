<?php

require ("../requirem/conexion.php");

/*if ($link) {
	 echo "conectado";
	}else{ echo"No conectado";
	}*/


$placaout=$_POST["placaout"];

/****************************************manipulación hora */

$tiempo=date("Y-m-d H:i:s");
$hora_outc=date("H:i:s");
$horasout0=date("G");


/****************************************INSERTAR REGISTRO****************************************/	

if (!empty ($placaout)){

$selector = "SELECT * FROM vehiculos WHERE idplaca='$placaout'";
$buscar= mysql_query($selector,$link) or  die('Error: ' . mysql_error());
$filas=mysql_num_rows($buscar);


	while($registro=mysql_fetch_array($buscar)){
					
					$siplaca=$registro["idplaca"];
					
			}
		   
								
		} else {
			
		
	 echo "<script>alert('Escriba la placa')</script>";
			echo "<script>location.href='index1.php?pg=usuario.php'</script>";
	
			} 	
			
if (empty ($siplaca))
		{  $siplaca = 1; 
		}					





			
			
if ($siplaca==$placaout){


$inserta = "INSERT INTO `parko`.`outs` (`idout`, `hora_out`, `dia_out`, `hora_outsin0`, `idplaca`) VALUES ('', '$hora_outc', '$tiempo', '$horasout0', '$placaout')";
$datos= mysql_query($inserta,$link) or  die('Error: ' . mysql_error());


echo "<script>alert('La Informacion se ha Cargado Correctamente')</script>";
			echo "<script>location.href='index1.php?pg=out.php'</script>";

} else {

	 echo "<script>alert('La información no se encuentra incluida en la base de datos --Por Favor Ingrese sus datos en el formulario.--')</script>";
			echo "<script>location.href='index1.php?pg=usuario.php'</script>";
	
			}
			
$insertfact = "INSERT INTO ";
			


mysql_close($link); //cierra la conexion*/

?>
