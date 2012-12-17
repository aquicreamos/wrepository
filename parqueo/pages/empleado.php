<?PHP 

include ("class_empleado.php");


echo "
<p align='center' style='font-size:18px; font-style:italic;'><strong>INSCRIPCION DE EMPLEADOS</strong></p><br />
<form id='form1' name='form1' method='post' action='class_empleado.php'>
<div><table align='center' border='0' cellspacing='0' cellpadding='0'>
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
    <td valign='top'><p>Rol </p></td>
    <td valign='top'><p>
      <select name='usuario_empl'>
        <option>Administrador</option>
        <option>Empleado</option>
      </select>
    </td>
    </tr>
 
</table></p>
<p align='center'><input name='btnemplsend' type='submit' value='Enviar' class='button' /></p>
</form>";



?>