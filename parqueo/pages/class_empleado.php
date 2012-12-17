<?php

require ("../requirem/conexion.php");
 




/****************************************INSERTAR REGISTRO****************************************/	

if (isset($_POST["btnemplsend"]))	{

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

$insertar =  "INSERT INTO `parko`.`empleados` (`idcedula_empl`, `nombres_empl`, `apellido1_empl`, `apellido2_empl`, `email_empl`, `direccion_empl`, `telefono_empl`, `usuario_empl`, `contrasenia_empl`, `rol_idrol`, `changpass`, `municipios_state_id`, `ciudad`) VALUES ('$idcedula_empl', '$nombres_empl', '$apellido1_empl', '$apellido2_empl', '$email_empl', '$direccion_empl', '$telefono_empl', '$usuario_empl', '123456', '1002', 'SI', '$municipio', '$ciudad')";

$datos= mysql_query($insertar,$link) or  die('Error: ' . mysql_error());

if ($datos) {
	 echo "<script>alert('La información fue insertada exitosamente.!!')</script>";
			echo "<script>location.href='empleado.php'</script>";
	}else{ echo "<script>alert('La información fue insertada exitosamente.!!')</script>";
			echo "<script>location.href='empleado.php'</script>";
			
			}
}


 /****************************************INSERTAR MUNICIPIOS Y CIUDADES COMBO SELECT****************************************/	 
   //function departamentos () {
   $codigo="select state_id ,state_name from municipios";
   $result=mysql_query($codigo,$link);  
   while($filas=mysql_fetch_array($result)){
        $codigos[]=$filas["state_id"];
		$nombres[]=$filas["state_name"];
   }
  
   //}

 
  
?>






