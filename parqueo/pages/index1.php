<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.1.0.48375
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Page 1</title>



    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
   
   
</head>
<body>
<div id="page-background-glare-wrapper">
    <div id="page-background-glare"></div>
</div>
<div id="main">
    <div class="cleared reset-box"></div>
    <div class="box sheet">
        <div class="box-body sheet-body">
<div class="bar nav">



<?php
session_start();




include ("menu_usuario.php");



$pg=(isset($_GET['pg']))?$_GET['pg']:''; //Capturar Valor de Variable Pagina
?>

</div>
<div class="cleared reset-box"></div>
<div class="header">
                  
                        <div id="flash-area">
                        <div id="flash-container">
                        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="431" id="flash-object">
                            <param name="movie" value="images/flash.swf" />
                            <param name="quality" value="low" />
                        	<param name="scale" value="default" />
                        	<param name="wmode" value="transparent" />
                        	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                            <param name="swfliveconnect" value="true" />
                            <!--[if !IE]>-->
                            <object type="application/x-shockwave-flash" data="images/flash.swf" width="100%" height="431">
                                <param name="quality" value="low" />
                        	    <param name="scale" value="default" />
                        	    <param name="wmode" value="transparent" />
                        	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                                <param name="swfliveconnect" value="true" />
                            <!--<![endif]-->
                              	<div class="flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
                            <!--[if !IE]>-->
                            </object>
                            <!--<![endif]-->
                        </object>
                        </div>
                        </div>
                        <div class="logo">
                                                 <h1 class="logo-name"><a href="./index.html">SISTEMA DE GESTIÓN PARKo</a></h1>
                                                                         <h2 class="logo-text">Porque hay seguridad y Confianza</h2>
                                                </div>
                
            </div>
			
			
			
			
			
            <div class="cleared reset-box"></div>
            <div class="layout-wrapper">
                <div class="content-layout">
                    <div class="content-layout-row">
                        <div class="layout-cell sidebar1">
<div class="box block">
    <div class="box-body block-body">
                <div class="bar blockheader">
                    <h3 class="t">ADMIN PARKO	</h3>
                </div>
                <div class="box blockcontent">
                    <div class="box-body blockcontent-body">
                <p>En este Espacio usted Podra!...</p>

<p>Ingresar entradas y salidas de Automoviles, Tambien podra consultar estados de pagos, de vehiculos es de recordar que el valor perteneciente a un Vehiculo de 4 Ruedas es de 1500. Categoria Nacional I F/H, Motos 500 F/H y Ciclas 300F/H</p>                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>

                          <div class="cleared"></div>
                        </div>
                        
<!--AQUI SE ENCUENTRA EL ESPACIO PRINCIPAL DE CONSTRUCCIÓN -->
                        
                        <div class="layout-cell content" align="center">
 
   <!--AQUI INICIAMOS -->
   
   <?php
	
	if (empty($pg)) {
		
		echo "BIENVENIDOS A PARKO (PARKEO)
		<br />
		<table width='300' border='0' align='center'>
  <tr>
    <td><img src='http://images01.olx.com.co/ui/1/97/77/10199077_1.jpg' width='270' height='226' /></td>
    <td><a href='https://maps.google.com/maps/ms?ll=4.450421,-75.154949&amp;spn=0.006161,0.006899&amp;t=m&amp;z=17&amp;msa=0&amp;msid=204460325250145000146.0004d043cfa41adfe4b19&amp;source=embed'><img src='images/map.jpg' width='246' height='228' /></td>
  </tr>
</table>";
		
		} else {
			
		include ($pg);
		
		}
	?>
   
   <!--AQUI FINALIZAMOS -->


		</div>
</div>

                         </div>
                    </div>
                </div>
            </div>
            
            
            
    		
        </div>
    </div>
    
    
<!--AQUI SE ENCUENTRA Y FINALIZA EL ESPACIO PRINCIPAL DE CONSTRUCCIÓN -->
    <div class="footer">
        <div class="footer-body">
            <div class="footer-center">
                <div class="footer-wrapper">
                    <div class="footer-text">
                        <a href="#" class="rss-tag-icon" title="RSS"></a>
                        <p><br /></p>
                        <div class="cleared"></div>
                        <p class="page-footer"><a href="http://www.artisteer.com/?p=website_templates" target="_blank">Website Template</a> created with Artisteer.</p>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
</div>

</body>
</html>
