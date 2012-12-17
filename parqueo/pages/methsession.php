<?php
require ("../requirem/conexion.php");

/*if (isset ($_SESSION['user'] )) 
{ 
@session_start ();
} */


$user=$_POST["user"];
$pass=$_POST["pass"];

$buser = "SELECT empleados.idcedula_empl, empleados.usuario_empl, empleados.contrasenia_empl, empleados.rol_idrol
FROM empleados WHERE usuario_empl = administrador";
 $busertest = mysql_query ($buser, $link) or die ('Error:' . mysql_error());
  while($registro=mysql_fetch_array($busertest)){
   $usuario = $registro["usuario_empl"];
   $password = $registro["contrasenia_empl"];
   $rol = $registro["rol_idrol"];
}


/*

if ($user = $usuario && $pass = $password ) {
    
 $_SESSION["user"]=$user; 
 $_SESSION["pass"]=$pass;
   echo "<script>alert('Usuario y Contrasenia son Correctos.!!')</script>"; 
    echo "<script>location.href='index.php'</script>";
} else {
    
    echo "<script>alert('Usuario y Contrasenia del Empleado No se encuentran en la Base de Datos.!!')</script>";
			echo "<script>location.href='empleado.php'</script>";
}
*/
 mysql_close($link);
?>
