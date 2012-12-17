  <?php
  
  require ("../requirem/conexion.php");


  
/******************************CONSULTA userEADO**********************************************************/  
echo "
<table border='1' align='center'>
  <tr>
    <td width='59' valign='middle'><p>Cedula</p></td>
    <td width='69' valign='middle'><p>Nombres</p></td>
    <td width='69' valign='middle'><p>Apellidos</p></td>
    <td width='55' valign='middle'><p>E-Mail</p></td>
    <td width='70' valign='middle'><p>Dirección</p></td>
    <td width='67' valign='middle'><p>Telefono</p></td>
    <td width='61' valign='middle'><p>Usuario</p></td>
    <td width='59' valign='middle'><p>Ciudad</p></td>
  </tr>";
  
$carterav = "SELECT users.idcedula_user, users.nombres_user, users.apellido1_user, users.apellido2_user,
users.email, users.direccion_user, users.telefono, users.usuario, users.contrasenia, users.municipios_state_id,
users.ciudad FROM users"; 

$buscar= mysql_query($carterav,$link) or  die('Error: ' . mysql_error());
  while($registro=mysql_fetch_array($buscar)){
  echo "<tr>
    <td width='59' valign='middle'><p>".$registro["idcedula_user"]."</p></td>
    <td width='69' valign='middle'><p>".$registro["nombres_user"]."</p></td>
    <td width='69' valign='middle'><p>".$registro["apellido1_user"].$registro["apellido2_user"]."</p></td>
    <td width='70' valign='middle'><p>".$registro["email"]."</p></td>
    <td width='67' valign='middle'><p>".$registro["direccion_user"]."</p></td>
    <td width='61' valign='middle'><p>".$registro["telefono"]."</p></td>
    <td width='59' valign='middle'><p>".$registro["usuario"]."</p></td>
	<td width='59' valign='middle'><p>".$registro["ciudad"]."</p></td>
  </tr>";}
		
  
 echo "</table>";
  
/******************************FIN CONSULTA CARTERA**********************************************************/  
   

  
  
 mysql_close();
  
  ?>