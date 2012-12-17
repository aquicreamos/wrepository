  <?php
  
  require ("../requirem/conexion.php");

$name=$_POST["indentifica"];
$placa=$_POST["placas"];
  $hora_fac=date("Y-m-d H:i:s");
  
  
/******************************CONSULTA CARTERA**********************************************************/  
echo "
<table width='300' border='1'>
  <tr>
    <td>Id Vehiculo</td>
    <td>Cartera</td>
    <td>Vehiculo</td>
  </tr>";
  
$carterav = "SELECT * FROM cartera WHERE vehiculos_idplaca='qqk90c'";
$buscar= mysql_query($carterav,$link) or  die('Error: ' . mysql_error());
  while($registro=mysql_fetch_array($buscar)){
  echo "<tr>
    <td>".$idcart=$registro["idcartera"]. "</td>".
    "<td>".$valcart=$registro["valor"]. "</td>
    <td>".$vehcart=$registro["vehiculos_idplaca"]."</td>
  </tr>";}
		
  
 echo "</table>";
  
/******************************FIN CONSULTA CARTERA**********************************************************/  
  

echo "
<table width='1020' border='1' cellpadding='0' cellspacing='0'>
  <tr>
    <td width='50' valign='top'><p>Codigo de la Factura</p></td>
    <td width='50' valign='top'><p>Fecha de Facturacion</p></td>
    <td width='50' valign='top'><p>Cancelado</p></td>
    <td width='50' valign='top'><p>Total esta Factura</p></td>
    <td width='50' valign='top'><p>Cedula</p></td>
    <td width='50' valign='top'><p>Placa del Auto</p></td>
	<td width='50' valign='top'><p>Nombres</p></td>
    <td width='50' valign='top'><p>Apellidos</p></td>
    <td width='50' valign='top'><p>Email</p></td>
    <td width='50' valign='top'><p>Telefono</p></td>
    <td width='50' valign='top'><p></p>Direccion</td>
   
  </tr>";
  
//select tabla factura sin id's 
  
$factura =	"SELECT factura.idfactura, factura.fecha_facturacion, factura.cancelado, factura.totalfactura, factura.users_idcedula_user, factura.vehiculos_idplaca,
    factura.servicios_idservicios, factura.ins_idin, factura.outs_idout, factura.cartera_idcartera FROM factura WHERE factura.vehiculos_idplaca = '$placa'";
    $fsearch= mysql_query($factura,$link) or  die('Error: ' . mysql_error());
     while($fregistro=mysql_fetch_array($fsearch)){
    echo "<tr>
    <td>".$fregistro["idfactura"]."</td>
			<td valign='top'>".$fregistro["fecha_facturacion"]."</td>
			<td valign='top'>".$fregistro["cancelado"]."</td>
			<td valign='top'>".$fregistro["totalfactura"]."</td>
			<td valign='top'>".$fregistro["users_idcedula_user"]."</td>
			<td valign='top'>".$fregistro["vehiculos_idplaca"]."</td>";
		}
  
  
  //select tabla usuarios 
  
  
$namefull = "SELECT users.nombres_user, users.apellido1_user, users.apellido2_user, users.email, users.direccion_user, users.telefono FROM users WHERE idcedula_user ='$name'";
$namesearch= mysql_query($namefull,$link) or  die('Error: ' . mysql_error());
while($fregistro=mysql_fetch_array($namesearch)){
    echo "  <td>".$fregistro["nombres_user"]."</td>
			<td valign='top'>".$fregistro["apellido1_user"].$fregistro["apellido2_user"]."</td>
			<td valign='top'>".$fregistro["email"]."</td>
			<td valign='top'>".$fregistro["telefono"]."</td>
			<td valign='top'>".$name=$fregistro["direccion_user"]."</td></tr>";
			
		}
  
  
 echo " </table>";
  
  
 
  
  ?>