<?php
require_once('conexion3.php');   

if (isset($_POST['inputtext1']) && isset($_POST['inputtext2'])) {
  $loginUsername=$_POST['inputtext1'];
  $password=$_POST['inputtext2'];
	
  $LoginRS__query="SELECT idusuario, nombrecomp, cargo FROM excel2402 WHERE matricula='$loginUsername' AND password='$password'";
  $LoginRS = mysql_query($LoginRS__query, $conexion) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS); 
  //echo "num $loginFoundUser";
  if ($loginFoundUser) {
	$userLogin = mysql_fetch_array($LoginRS);
	if ($userLogin["cargo"]=="Administrat0r"){
		$_SESSION['ida'] = $userLogin["idusuario"];	
			
		if (isset($_SESSION['PrevUrl']) && false) {
		  $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    	}
		header("Location: buscador.php");

	}else{
		$_SESSION['idu'] = $userLogin["idusuario"];	
			
		if (isset($_SESSION['PrevUrl']) && false) {
		  $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    	}
		header("Location: online_gestion.php");
	}
  } else {
	echo "<center><br>Usuario y/o contraseña incorrectas. Vuelva a intentar</center>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>UNIDAD: GESTIÓN DE LISTAS</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mailform.css"/>
    <link rel="stylesheet" href="css/camera.css"/>
    <link rel="stylesheet" href="css/owl-carousel.css"/>
    <link rel="stylesheet" href="css/touch-touch.css"/>
    <link rel="stylesheet" href="css/google-map.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <!--[if lt IE 9]>
    <html class="lt-ie9">
      <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
          <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
          alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
      </div>
      <script src="js/html5shiv.js"></script>
      <![endif]-->
      <script src='js/device.min.js'></script>
</head>
<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>
        <div class="container">
            <div class="well-xs">
                <div class="brand">
                    <div class="brand__logo">
                        <img src="images/logo.png" alt=""/>
                    </div>
                    <div class="brand__cnt">
                        <div class="brand__name">
                            <a href="./"></a>
                        </div>
                        <div class="brand__slogan">
                        </div>
                    </div>
                </div>
                <!-- TM Search -->
                <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                    <label class="search-form_label">
                        <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder="Buscar.."/>
                        <span class="search-form_liveout"></span>
                    </label>
                    <button class="search-form_submit fa-search" type="submit"></button>
                </form>
                <!-- END TM Search -->
                <div class="contact-info">
                    <div class="box">
                        <div class="box_left">
                        </div>
                        <div class="box_cnt">
                        </div>
                    </div>
                    <div class="box">
                        <div class="box_left">
                        </div>
                        <div class="box_cnt">
                            <dl>
                                <dt></dt>
                                <dd></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <div id="stuck_container" class="stuck_container bg-img-1">
            <div class="container">
              <nav class="nav">
                <ul class="sf-menu" data-type="navbar">
                  <li class="active">
                    <a href="index.html">INICIO</a>
                  </li>
                    <li>
                    <a href="conocenos.html">centro nacional</a>
                    <ul>
                     <li>
                        <a href="conocenos.html">PRESENTACIÓN</a>
                      </li>
                      <li>
                        <a href="personal.html">PERSONAL</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="sistema.html">SISTEMA CENTROS</a>
                  </li>
                  <li>
                    <a href="">SERVICIOS EN LÍNEA</a>
                    <ul>
                     <li>
                        <a href="videoconferencias.html">VIDEOCONFERENCIAS</a>
                      </li>
                      <li>
                        <a href="http://sicapacitacion.com/nacional/inscripciones/inscripciones.php">INSCRIPCIONES</a>
                      </li>
                      <li>
                      <a href="online.html">CAPACITACIÓN A DISTANCIA</a>
                      </li>
                      <li>
                      <a href="catalogo2016.html">CATÁLOGO DE CURSOS</a>
                      </li>
                      
                    </ul>
                  </li>
                
                  <li>
                    <a href="sitio_ser.html">PROGRAMA SER IMSS</a>
                  </li>
                  
                  
                </ul>
              </nav>
              <ul class="inline-list">
                <li><a href="https://www.youtube.com/channel/UCwB8o0hdL-L4fDHsAROBdTg" class="icon icon-md icon-default fa fa-youtube"></a></li>
                <li><a href="http://twitter.com/Si_Capacitacion" class="icon icon-md icon-default fa fa-twitter"></a></li>
                <li><a href="http://sicapacitacion.com/webmail" class="icon icon-md icon-default fa fa-envelope"></a></li>
              </ul>
            </div>
          </div>
        </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <!-- Post -->
        <section class="well-sm bg-secondary">
        	<div class="container">
                <div class="row">
                    <div class="col-md-5">
                    
                        <h2 class="primary">UNIDAD EN LÍNEA:</h2><br><br>
<p class="big secondary-2">"Gestión de listas de información en Ecxel"<br><br>
<p align="center">DEFINE USUARIO Y CONTRASEÑA PARA INGRESAR A LA UNIDAD</p> <br><br>
<p><form id="form1" method="post" action="#">
  <div align="left">
    <p>
      <label for="inputtext1">Usuario: </label>
      <input name="inputtext1" type="text" id="inputtext1" value="" size="20" /><br><BR>
      &nbsp;<label for="inputtext2">Contrase&ntilde;a: </label>
      <input name="inputtext2" type="password" id="inputtext2" value="" size="15" maxlength="15" />
      &nbsp;&nbsp;</p>
  </div>
  <br />
  <div align="center">
    <input id="inputsubmit1" type="submit" name="inputsubmit1" value="Ingresar" />
  </div>
</form></p>
                    </div>
                    <div class="col-md-7">
                    

                        
                    <p align="center"><img src="images/logosntss1.png" width="223" height="273"></p>

                    </div>
                </div>
        	</div>
        </section>
        <!-- END Post -->
        
        
        
    </main>
    <!--========================================================
                            FOOTER
     =========================================================-->
        <footer>
          <section class="well-xs bg-img-1">
            <div class="container">
              <div class="copyright">
                Calz. del Hueso #300 Ex Hacienda Coapa C.P. 04920 Teléfonos (55) 56.79.72.03  Ext. 112 . 102 . 121 <br><br><a href="mailto:#"> E-mail contacto@sicapacitacion.com</a> 
              </div>

              <div class="copyright">
                Por Plataforma Web  Centro Nacional de Capacitación y Calidad <span id="copyright-year"></span>
              </div>
              <!-- {%FOOTER_LINK} -->
            </div>
          </section>
        </footer>
</div>

<script src="js/script.js"></script>
</body>
</html>