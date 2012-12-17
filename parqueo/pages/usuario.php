

<script language="JavaScript" type="text/javascript">

function tipovehiculo() {
if (tipovehiculo ==0) { 
var tipovehiculo;
 tipovehiculo = document.formul.tipo_vehi.tipo_vehi;
 alert("este texto es el que modificas");
} }
</script>

<?PHP include ("class_usuario.php");


echo "
<form id='form1' name='form1' method='post' action='class_usuario.php'>
<div><table align='center' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td colspan='4' valign='top'><p align='center' style='font-size:18px; font-style:italic; color:#FFFFFF'><strong>INSCRIPCIÓN DE USUARIOS</strong></p><br /></td>
  </tr>
  <tr>
    <td colspan='2' valign='top'><p align='center'><strong>NUMERO DE  IDENTIFICACION</strong></p></td>
    <td colspan='2' valign='top'><p align='center'><strong>
      <input type='text' name='idcedula_empl' id='idcedula_empl' />
      &nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width='77'><p>Usuario</p></td>
    <td width='207' valign='top'><p>
      <label for='usuario_empl'></label>
      <input type='text' name='usuario_empl' id='usuario_empl' />
    </p></td>
    <td width='144'><p>Departamento</p></td>
    <td width='220' valign='top'><p>
    
      <select name='municipio'>";
      
    
	For($k=0;$k<sizeof($codigos);$k++){
	   echo "<option selected value='$codigos[$k]'>$nombres[$k]</option>'";
	   
	}
	
      echo "</select>
    
        
    
    </p></td>
  </tr>
  <tr>
    <td width='77'><p>Nombres:</p></td>
    <td width='207' valign='top'><p>
      <input type='text' name='nombres_empl' id='nombres_empl' />
    </p></td>
    <td width='144'>Ciudad</td>
    <td width='220' valign='top'><p>
    <input type='text' name='ciudad' id='ciudad' />
     </p></td>
  </tr>
  <tr>
    <td width='77'><p>Apellido    1:</p></td>
    <td width='207' valign='top'><p>
      <input type='text' name='apellido1_empl' id='apellido1_empl' />
    </p></td>
    <td width='144'><p>Dirección</p></td>
    <td width='220' valign='top'><p>
      <input type='text' name='direccion_empl' id='direccion_empl' />
    </p></td>
  </tr>
  <tr>
    <td width='77'><p>Apellido    2:</p></td>
    <td width='207' valign='top'><p>
      <input type='text' name='apellido2_empl' id='apellido2_empl' />
    </p></td>
    <td width='144'><p>Teléfono: </p></td>
    <td width='220' valign='top'><p>
      <input type='text' name='telefono_empl' id='telefono_empl' />
    </p></td>
  </tr>
  <tr>
    <td width='77' valign='top'><p>Email:</p></td>
    <td width='207' valign='top'><p>
      <input type='text' name='email_empl' id='email_empl' />
    </p></td>
    </tr>
 
</table></p>";


echo "<hr>";


echo "<form id='class_usuario' name='class_usuario' method='post' action='class_usuario.php'>
<table align='center' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td width='599' colspan='4' valign='top'><p align='center'>Placa
	<input type='text' name='idplaca' id='idplaca' />
    </p></td>
  </tr>
  <tr>
    <td width='151' valign='top'><p>Tarjeta Propiedad</p></td>
    <td width='148' valign='top'><p>
      
      <input type='text' name='targetaprop_veh' id='targetaprop_veh' />
    </p></td>
    <td width='169' valign='top'><p>Tipo de Vehiculo</p></td>
    <td width='130' valign='top'><p>
     
	 <select name='tipo_vehi' >



<option value='0' '>Elija La Opcion</option>
<option value='Cicla'>Cicla</option>
<option value='Moto'>Moto</option>
<option value='Carro'>Carro</option>
</select>
    </p></td>
  </tr>
  <tr>
    <td width='599' colspan='4' valign='top'><div><p>Descripcion</p>
        <p align='center'>
      <textarea name='descripcion' id='descripcion' cols='35' rows='3'></textarea></p>
    </p></div></td>
  </tr>
  <tr>
    <td width='599' colspan='4' valign='top' align='center'><p>Fotografia 
        
    </p></td>
  </tr>
</table>
</form>";
//<input name='archivo' type='file' size='35' />

echo "<hr>";

echo "<p align='center'><input name='btnemplsend' type='submit' value='Enviar' class='button' /></p>
</form>";
?>