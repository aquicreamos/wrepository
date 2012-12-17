<?php
echo "<div class='nav-outer'>
	<ul class='hmenu'>
		<li>
			<a href='index1.php' class='active'>Inicio</a>
			<!--ul>
				<li>
                    <a href='./new-page/new-page.html'>Subpaginas</a>

                </li>
				
			</ul>-->
		</li>	
		<li>
			<a href='#'>INSCRIPCIONES</a>
		  <ul>
				<li>
                    <a href='index1.php?pg=empleado.php'>EMPLEADO</a>
					<a href='index1.php?pg=usuario.php'>USUARIO</a>

                </li>
				
			</ul>
		</li>
        
		<li>
			<a href='#'>REGISTRO</a>
			
			<ul>
				<li>
                    <a href='index1.php?pg=in.php'>ENTRADA VEHICULO</a>
					<a href='index1.php?pg=out.php'>SALIDA VEHICULO</a>

                </li>
				
			</ul>
			
		</li>
        <li>
			<a href='#'>CONSULTAS</a>
			<ul>
				<li>
                    <a href='index1.php?pg=revisar.php'>VERIFICAR PROCESO</a>
					<a href='index1.php?pg=conscart.php'>CONSULTAR VALORES</a>
					<a href='index1.php?pg=consusuario.php'>CONSULTAR USUARIOS</a>
					<a href='index1.php?pg=consempleado.php'>CONSULTAR EMPLEADOS</a>
					<a href='index1.php?pg=consultavehiculo.php'>CONSULTAR VEHICULOS</a>
                </li>
				
			</ul>
		</li>	
		<li>
			<a href='#'>FACTURAS</a>
			<ul>
				<li>
                    <a href='index1.php?pg=formfact.php'>CONSULTAR FACTURA</a>
					<a href='index1.php?pg=musuariosfact.php'>FACTURAS</a>
				</li>
				
			</ul>
		</li>	
	</ul>
</div>";
?>