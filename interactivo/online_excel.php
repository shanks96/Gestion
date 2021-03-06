<?php
include_once("conexion3.php");

if (!isset($_SESSION['idu'])){
	  header("Location: online.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Curso a distancia</title>
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
                  <li>
                    <a href="index.html">INICIO</a>
                  </li>
                    <li  class="active">
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
        <!-- About us -->
        <section class="well-sm well-sm-inset-1 bg-secondary-2">
        	<div class="container">
        		<div class="row">
                    <div class="col-md-4">
                        <h2>CURSO A DISTANCIA</h2>
                        <img class="block-md-center" src="images/page-2_img01.png" alt=""/>
                        <h2>UNIDAD EDUCATIVA</h2>


                        <ul class="index-list">
                            
                            <li>
                                <h5><a href="http://www.sicapacitacion.com/nacional/interactivo/formulas.pdf">Fórmulas en Excel</a></h5>
                            </li>
                            <li>
                                <h5><a href="http://www.sicapacitacion.com/nacional/interactivo/funciones.pdf">Funciones en Excel</a></h5>
                            </li>
                            
                        </ul>
                       
                    </div>
                    <div class="col-md-4">
                        <h2>"Fórmulas y funciones en Excel"</h2>
                         <h2>PRESENTACIÓN</h2><br><br>
                        
                        <p align="justify">Ésta unidad esta dirigida a: Trabajadores activos del Instituto Mexicano del Seguro Social interesados en desarrollar y conocer estas herramientas que le ayuden en sus funciones laborales.<br><br><br>
                         <h2>FINALIDAD</h2><br><br>
                       
Al concluir la capacitación, el trabajador-alumno empleará fórmulas  en Excel,  haciendo uso de operadores y referencias, además, empleará funciones básicas como: suma, promedio, contar, max, min, entre otras, con el fin de optimizar su trabajo.<br>

<img class="block-md-center" src="images/page-2_img0111.jpg" alt=""/>


                    </div>
                    <div class="col-md-4">
                        <h2>Material Interactivo</h2>
                       
                        <ul class="index-list">
                            <li>
                                <h5> <a href="http://www.sicapacitacion.com/nacional/interactivo/fnsuma.htm">FN SUMA</a></h5>
                            </li>
                            <li>
                                <h5><a href="http://www.sicapacitacion.com/nacional/interactivo/fnpromedio.htm">FN PROMEDIO</a></h5>
                            </li>
                            <li>
                                <h5><a href="http://www.sicapacitacion.com/nacional/interactivo/fnmax.htm">FN MAX</a></h5>
                            </li>
                            <li>
                                <h5><a href="http://www.sicapacitacion.com/nacional/interactivo/fnmin.htm">FN MIN</a></h5>
                            </li>
                            <li>
                                <h5><a href="http://www.sicapacitacion.com/nacional/interactivo/fncontar.htm">FN CONTAR</a></h5>
                            </li>
                            <li>
                                <h5><a href="http://www.sicapacitacion.com/nacional/interactivo/fncontarsi.htm">FN CONTAR.SI</a></h5>
                            </li>
                            
                            
                        </ul>
                       
                            <br/><br/>
                          </p>
                    </div>
                </div>
        	</div>
            
        </section>
        <!-- END About us -->
        
        <!-- Services -->
        <section class="well-xs well-sm-inset-1 bg-secondary-2">
            <div class="container">
                <h2>Descarga de ejercicios y evaluación</h2>
                <h5> </h5>
                <p></p>
                <div class="row flow-offset-1">
                    <div class="col-md-3 col-sm-6">
                        <div class="box">
                            <div class="box_left">
                                <span class="icon icon-primary icon-lg fa fa-download"></span>
                            </div>
                            <div class="box_cnt">
                                <h5>Ejercicio de fórmulas</h5>
                            </div>
                        </div>
                        <p></p>
                        <a href="http://www.sicapacitacion.com/nacional/interactivo/ejercicio_formulas.xlsx" class="link link-primary">Consulta aquí</a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box">
                            <div class="box_left">
                                <span class="icon icon-primary icon-lg fa fa-download"></span>
                            </div>
                            <div class="box_cnt">
                                <h5>Ejercicio de operaciones
                                   </h5>
                            </div>
                        </div>
                        <p></p>
                        <a href="http://www.sicapacitacion.com/nacional/interactivo/ejercicio_operaciones.xlsx" class="link link-primary">Consulta aquí</a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box">
                            <div class="box_left">
                                <span class="icon icon-primary icon-lg fa fa-download"></span>
                            </div>
                            <div class="box_cnt">
                                <h5>Ejercicio de funciones</h5>
                            </div>
                        </div>
                        <p></p>
                        <a href="http://www.sicapacitacion.com/nacional/interactivo/ejercicio_funciones.xlsx" class="link link-primary">Consulta aquí</a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box">
                            <div class="box_left">
                                <span class="icon icon-primary icon-lg fa fa-download"></span>
                            </div>
                            
                            
                            
                            <div class="box_cnt">
                                <h5>Descarga evaluación
                                    </h5>
                            </div>
                        </div>
                        <p></p>
                        <a href="http://www.sicapacitacion.com/nacional/interactivo/evaluacion.xlsx" class="link link-primary">Consulta aquí</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Services -->
        
        
        


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