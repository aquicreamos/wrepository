<?php

  $host="localhost";
  $user="root";
  $pass="toor";
  $bddatos="parko";
	// Ahora estamos realizando una conexi�n y la llamamos �$link�
	
	$link=mysql_connect($host, $user, $pass) or die ("Error conectando a la base de datos.");
	// Seleccionamos la base de datos que nos interesa
	
	
	
	mysql_select_db($bddatos,$link) or die("Conexi�n Fallida");
	// Devolvemos $link porque nos har� falta m�s adelante, cuando queramos hacer consultas.
	
	
	/*if (mysql_select_db($bddatos,$link)) {
	 echo "conectado";
	}else{ echo"No conectado";
	
	}*/

?>