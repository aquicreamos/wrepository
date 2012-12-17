  <?php
  
  require ("../requirem/conexion.php");

/*$name=$_POST["indentifica"];
$placa=$_POST["placas"];*/
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
   
 echo " </table>";
  
  
 mysql_close();
  
  ?>