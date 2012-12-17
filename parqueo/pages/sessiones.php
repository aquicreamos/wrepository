<?php 
switch ($_SESSION["perfil"]) 
	{
		case "": // Usuario standar
				 include('menu/usuario.php');
				 break;
		case "1001": // Administrador
				 include('menu/menuad.php');
				 break;
		case "1002": // Empleado 
				 include('menu/empleado.php');
				 break;
		default:
				 break;
	}



?>