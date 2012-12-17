  <?php
  
  require ("../requirem/conexion.php");



  $hora_fac=date("Y-m-d H:i:s");
  
  
 
/******************************CONSULTAR TODAS LAS FACTURAS Y LOS USUARIOS FIN CONSULTA CARTERA**********************************************************/  
  

echo "
<table width='1020' border='1' cellpadding='0' cellspacing='0'>
  <tr>
    <td width='50' valign='top'><p>Codigo de la Factura</p></td>
    <td width='50' valign='top'><p>Fecha de Facturacion</p></td>
    <td width='50' valign='top'><p>Cancelado</p></td>
    <td width='50' valign='top'><p>Total esta Factura</p></td>
    <td width='50' valign='top'><p>Cedula</p></td>
    <td width='50' valign='top'><p>Nombres</p></td>
    <td width='50' valign='top'><p>Apellidos</p></td>
    <td width='50' valign='top'><p>Direccion</p></td>
    <td width='50' valign='top'><p>Telefono</p></td>
    <td width='50' valign='top'><p>Placa del Auto</p></td>
    <td width='50' valign='top'><p></p>Tipo de Vehiculo</td>
    <td width='50' valign='top'><p></p>Targeta de Propiedad</td>
  </tr>";
  

  
$factura =	"SELECT factura.idfactura, factura.fecha_facturacion, factura.cancelado, factura.totalfactura, users.idcedula_user, users.nombres_user, users.apellido1_user, users.apellido2_user,
             users.direccion_user, users.telefono, vehiculos.idplaca, vehiculos.tipo_vehi, vehiculos.targetaprop_veh 
               FROM factura, vehiculos, users";
  
     $fsearch= mysql_query($factura,$link) or  die('Error: ' . mysql_error());
     while($fregistro=mysql_fetch_array($fsearch)){
    echo "<tr>
    <td>".$fregistro["idfactura"]."</td>
			<td valign='top'>".$fregistro["fecha_facturacion"]."</td>
			<td valign='top'>".$fregistro["cancelado"]."</td>
			<td valign='top'>".$fregistro["totalfactura"]."</td>
			<td valign='top'>".$fregistro["idcedula_user"]."</td>
			<td valign='top'>".$fregistro["nombres_user"]."</td>
			<td valign='top'>".$fregistro["apellido1_user"].$fregistro["apellido2_user"]."</td>
			<td valign='top'>".$fregistro["direccion_user"]."</td>
			<td valign='top'>".$fregistro["telefono"]."</td>
			<td valign='top'>".$fregistro["idplaca"]."</td>
			<td valign='top'>".$fregistro["tipo_vehi"]."</td>
			<td valign='top'>".$fregistro["targetaprop_veh"]."</td>
						</tr>";
		}
  
  
 echo " </table>";
 
  mysql_close($link); //cierra la conexion
  ?>