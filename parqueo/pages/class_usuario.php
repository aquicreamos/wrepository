<?php

require ("../requirem/conexion.php");
 
/*if ($link) {
	 echo "conectado";
	}else{ echo"No conectado";
	}*/



/****************************************INSERTAR REGISTRO****************************************/	

if (isset($_POST["btnemplsend"]))	{
/*
global $departamento_id;

$idcedula_empl=$_POST["idcedula_empl"];
$nombres_empl=$_POST["nombres_empl"];
$apellido1_empl=$_POST["apellido1_empl"];
$apellido2_empl=$_POST["apellido2_empl"];
$email_empl=$_POST["email_empl"];
$direccion_empl=$_POST["direccion_empl"];
$telefono_empl=$_POST["telefono_empl"];
$usuario_empl=$_POST["usuario_empl"];
$municipio=$_POST["municipio"];
$ciudad=$_POST["ciudad"];


$insertar =  "INSERT INTO `parko`.`users` (`idcedula_user` , `nombres_user` ,`apellido1_user` ,`apellido2_user` ,`email` ,`direccion_user` ,`telefono` ,`usuario` ,`contrasenia` ,`municipios_state_id` ,`ciudad`)
VALUES ('$idcedula_empl', '$nombres_empl', '$apellido1_empl', '$apellido2_empl', '$email_empl', '$direccion_empl', '$telefono_empl', '$usuario_empl', '123456', '$municipio', '$ciudad')";

$datos1= mysql_query($insertar,$link) or  die('Error: ' . mysql_error());

if ($datos1) {
	 echo "<script>alert('La información fue insertada exitosamente.!!')</script>";
			echo "<script>location.href='usuario.php'</script>";
	}else{ echo "<script>alert('La información fue insertada exitosamente.!!')</script>";
			echo "<script>location.href='usuario.php'</script>";
			
			}
*/

$idplaca=$_POST["idplaca"];
$targetaprop_veh=$_POST["targetaprop_veh"];
//$foto=$_POST["foto"];
$tipo_vehi=$_POST["tipo_vehi"];
$descripcion=$_POST["descripcion"];
 
  $vehiculo="INSERT INTO `parko`.`vehiculos` (`idplaca` ,`targetaprop_veh` ,`foto` ,`tipo_vehi` ,`descripcion`) VALUES ('$idplaca' ,'$targetaprop_veh' ,'' ,'$tipo_vehi' ,'$descripcion')";
$datos2= mysql_query($vehiculo,$link) or  die('Error: ' . mysql_error());

if ($datos2) {
	 echo "<script>alert('La información fue insertada exitosamente.!!')</script>";
			echo "<script>location.href='usuario.php'</script>";
	}else{ echo "<script>alert('La información fue insertada exitosamente.!!')</script>";
			echo "<script>location.href='usuario.php'</script>";
			
			}
  
  
}
  
  
  /****************************************INSERTAR MUNICIPIOS Y CIUDADES COMBO SELECT****************************************/	 
 
   $codigo="select state_id ,state_name from municipios";
   $result=mysql_query($codigo,$link);  
   while($filas=mysql_fetch_array($result)){
        $codigos[]=$filas["state_id"];
		$nombres[]=$filas["state_name"];
   }
?>






