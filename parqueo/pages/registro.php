<?php

require ("../requirem/conexion.php");

/*if ($link) {
	 echo "conectado";
	}else{ echo"No conectado";
	}*/


$placa=$_POST["placa"];

/****************************************manipulación hora */

$tiempo=date("Y-m-d H:i:s");
$hora_insc=date("H:i:s");
$horasin0=date("G");


/****************************************INSERTAR REGISTRO****************************************/	

if (!empty ($placa)){

$selector = "SELECT * FROM vehiculos WHERE idplaca='$placa'";
$buscar= mysql_query($selector,$link) or  die('Error: ' . mysql_error());
$filas=mysql_num_rows($buscar);


	while($registro=mysql_fetch_array($buscar)){
					
					echo $siplaca=$registro["idplaca"];
					echo $tvehiculo=$registro["tipo_vehi"];
			}
		   
								
		} else {
			
		
	 echo "<script>alert('Escriba la Placa')</script>";
			echo "<script>location.href='index1.php?pg=usuario.php'</script>";
	
			} 	
			
if (empty ($siplaca))
		{  $siplaca = 1; 
		}					

			
			
if ($siplaca==$placa){


$inserta = "INSERT INTO `parko`.`ins` (`idin`, `hora_in`, `dia_in`, `hora_insin0`, `idplaca`) VALUES ('', '$hora_insc', '$tiempo', '$horasin0', '$placa')";
$datos= mysql_query($inserta,$link) or  die('Error: ' . mysql_error());

echo "<script>alert('La Informacion se ha Cargado Correctamente.--')</script>";
			


} else {

	 echo "<script>alert('La información no se encuentra incluida en la base de datos --Por Favor Ingrese sus datos en el formulario.--')</script>";
			echo "<script>location.href='index1.php?pg=usuario.php'</script>";
	
			}


			

$cicla="Cicla";
$moto="Moto";
$carro="Carro";


if ($tvehiculo==$carro){
$tipo=1500;
}
if ($tvehiculo==$moto){
$tipo=500;
}
if ($tvehiculo==$cicla){
$tipo=300;
}		
			
		
if ($siplaca==$placa){


$insertamos = "INSERT INTO `parko`.`cartera` (idcartera, valor, vehiculos_idplaca) VALUES ('', '$tipo', '$placa')";
$carteradate= mysql_query($insertamos,$link) or  die('Error: ' . mysql_error());
echo "<script>location.href='index1.php?pg=in.php'</script>";
    
}			
			
			

mysql_close($link); //cierra la conexion

?>
