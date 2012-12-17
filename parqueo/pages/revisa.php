<style type='text/css'>
body p {
	text-align: center;
}
</style>



<?php

require ("../requirem/conexion.php");
$placaout = "";



if (empty($placaout)){

$placaout = 1;
$bregistro = "SELECT ins.hora_in, ins.dia_in,  ins.hora_insin0, ins.idplaca, outs.idout, outs.hora_out, outs.dia_out, outs.hora_outsin0 FROM ins , outs" ; 
$fsearch= mysql_query($bregistro,$link) or  die('Error: ' . mysql_error());
     while($fregistro=mysql_fetch_array($fsearch)){
	 
	echo "<table border='1' align='center'>
	<tr>
    <td width='150' valign='middle'>FECHA DE ENTRADA </td>
    <td width='150' valign='middle'><p align='center'>FECHA DE ENTRADA</p></td>
    <td width='150' valign='middle'><p align='center'>HORA NUM ENTRADA</p></td>
  </tr>
  <tr>
    <td width='150' valign='middle'><p>".$fregistro["hora_in"]."</p></td>
    <td width='150' valign='middle'><p>".$fregistro["dia_in"]."</p></td>
    <td width='150' valign='middle'><p>".$fregistro["hora_insin0"]."</p></td>
  </tr>
  <tr>
    <td width='150' valign='middle'><p align='center'>FECHA DE SALIDA</p></td>
    <td width='150' valign='middle'><p align='center'>FECHA DE SALIDA</p></td>
    <td width='150' valign='middle'><p align='center'>HORA NUM SALIDA</p></td>
  </tr>
  <tr>
    <td width='150' valign='middle'><p>".$fregistro["hora_out"]."</p></td>
    <td width='150' valign='middle'><p>".$fregistro["dia_out"]."</p></td>
    <td width='150' valign='middle'><p>".$fregistro["hora_outsin0"]."</p></td>
  </tr>
</table>
<p>&nbsp;</p>";
	 
    
	
	
			
		}
		
		}else {
		$placaout = $_POST["placaout"];
		$bregistro = "SELECT ins.hora_in, ins.dia_in,  ins.hora_insin0, ins.idplaca, outs.idout, outs.hora_out, outs.dia_out, outs.hora_outsin0 FROM ins , outs WHERE idplaca='$placaout'" ; 
$fsearch= mysql_query($bregistro,$link) or  die('Error: ' . mysql_error());
     while($fregistro=mysql_fetch_array($fsearch)){
	 
	echo "<p>".$fregistro["idplaca"]."</p><table border='1' align='center'>
	<tr>
    <td width='150' valign='middle'>FECHA DE ENTRADA </td>
    <td width='150' valign='middle'><p align='center'>FECHA DE ENTRADA</p></td>
    <td width='150' valign='middle'><p align='center'>HORA NUM ENTRADA</p></td>
  </tr>
  <tr>
    <td width='150' valign='middle'><p>".$fregistro["hora_in"]."</p></td>
    <td width='150' valign='middle'><p>".$fregistro["dia_in"]."</p></td>
    <td width='150' valign='middle'><p>".$fregistro["hora_insin0"]."</p></td>
  </tr>
  <tr>
    <td width='150' valign='middle'><p align='center'>FECHA DE SALIDA</p></td>
    <td width='150' valign='middle'><p align='center'>FECHA DE SALIDA</p></td>
    <td width='150' valign='middle'><p align='center'>HORA NUM SALIDA</p></td>
  </tr>
  <tr>
    <td width='150' valign='middle'><p>".$fregistro["hora_out"]."</p></td>
    <td width='150' valign='middle'><p>".$fregistro["dia_out"]."</p></td>
    <td width='150' valign='middle'><p>".$fregistro["hora_outsin0"]."</p></td>
  </tr>
</table>
<p>&nbsp;</p>";
		}

}

?>

