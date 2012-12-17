<html>
<style type="text/css">
#form1 p label {
	text-align: center;
}
p {
	text-align: center;
}
</style>

<?php 

echo "
<form id='formulfact' name='form' method='post' action='reportefact.php'>
  <p>Identificacion del Propietario 
    <label for='123'></label>
  <input type='text' name='indentifica' id='123' />
  </p>
  <p>Placa del Vehiculo 
    <label for='1235'></label>
    <input type='text' name='placas' id='1235' />
  </p>
  <input align='middle' name='enviafact' type='submit' />
</form>";
?> 

</html>

