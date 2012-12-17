  <?php
  
  require ("../requirem/conexion.php");


  
/******************************CONSULTA EMPLEADO**********************************************************/  
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
  
$carterav = 'SELECT empleados.idcedula_empl, empleados.nombres_empl, empleados.apellido1_empl, empleados.apellido2_empl,
empleados.email_empl, empleados.direccion_empl, empleados.telefono_empl, empleados.usuario_empl, empleados.contrasenia_empl,
empleados.ciudad FROM empleados'; 

$buscar= mysql_query($carterav,$link) or  die('Error: ' . mysql_error());
  while($registro=mysql_fetch_array($buscar)){
  echo "<tr>
    <td width='59' valign='middle'><p>".$registro["idcedula_empl"]."</p></td>
    <td width='69' valign='middle'><p>".$registro["nombres_empl"]."</p></td>
    <td width='69' valign='middle'><p>".$registro["apellido1_empl"].$registro["apellido2_empl"]."</p></td>
    <td width='70' valign='middle'><p>".$registro["email_empl"]."</p></td>
    <td width='67' valign='middle'><p>".$registro["direccion_empl"]."</p></td>
    <td width='61' valign='middle'><p>".$registro["telefono_empl"]."</p></td>
    <td width='59' valign='middle'><p>".$registro["usuario_empl"]."</p></td>
	<td width='59' valign='middle'><p>".$registro["ciudad"]."</p></td>
  </tr>";}
		
  
 echo "</table>";
  
/******************************FIN CONSULTA CARTERA**********************************************************/  
   

  
  
 mysql_close();
  
  ?>