<!DOCTYPE html>
<!-- <FRAMESET rows=",*" border="0"> -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Caraga  js -->
    <!-- Template Title -->
    <title>Trusted Circles</title>

    <!-- Cargar imagenes etc para wapp, fb... -->
    <meta property="og:title" content="Trusted Circles" />
    <meta property="og:description" content="Vuelve a casa con mayor seguridad" />
    <meta property="og:image" content="http://verify.trustedcircles.org/images/ogfondo1.jpg" />
    <meta property="og:url" content="http://verify.trustedtircles.org/index.html">
</head>

<?php


//Codigo para verificacion
//

$apiKey=$_GET['apiKey'];
$mode=$_GET['mode'];
$oobCode=$_GET['oobCode'];
if (isset($mode)){
    echo "<FRAMESET rows=',*' border='0'>";
    $url_verif="https://stop-agresiones-sexuales-eedaf.firebaseapp.com/__/auth/action?mode=$mode&oobCode=$oobCode&apiKey=$apiKey";
    #    header("Location: $url_verif");
    echo "<frame rows=',*' name='alto' src='$url_verif'>";
    echo "</frameset>";

}else{
    echo "<FRAMESET  border='0'>";
    echo "<frame src='inicial.html'>";
    echo "</frameset>";
} 
?>
<?php 
/*
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Caraga  js -->
    <!-- Template Title -->
    <title>Trusted Circles</title>

    <!-- Cargar imagenes etc para wapp, fb... -->
    <meta property="og:title" content="Trusted Circles">
    <meta property="og:description" content="">
    <meta property="og:image" content="http://www.trustedcircles.org/images/ogfondo1.jpg">
    <meta property="og:url" content="http://www.trustedtircles.org/index.html">


    <link rel="icon" href="images/fav.ico" type="image/x-icon"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="css/owl.carousel.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="css/prettyPhoto.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="style.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="css/color/white.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

    <!-- Custom Responsive stylesheet -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" ></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js" ></script>
    <![endif]-->
  </head>
  <body>
	  <!-- ====== Language Section ====== -->
    <!-- ====== Header Section ====== -->
    <header id="top">
      <div class="bg-color" style="text-align:right;color:#fff;">
	      <button id="en-btn" style="padding: 0;border:none;"><img src="images/en.png"></button>
	      <button id="es-btn" style="padding: 0;border:none;"><img src="images/es.png"></button>
	      <button id="eu-btn" style="padding: 0;border:none;"><img src="images/eu.png"></button>
        <div class="top section-padding" >
          <div class="container">
            <div class="row">

              <div class="col-sm-7 col-md-7">
                <div class="content">
			<h1 data-translatable>TrustedCircles // TrustedCircles // TrustedCircles </h1>
                  <h2 data-translatable>An application that helps you to return home more peacefully // Una aplicación que te ayudará a volver a casa con más tranquilidad // Etxera lasaiago itzultzen lagunduko dizun aplikazioa</h2>

                  <p data-translatable>With Trusted Circles you will be able to accompany or be accompanied by people of your confidence when you feel in danger, in addition it will allow you to avoid attacks to both known and unknown people. // Con Trusted Circles podrás acompañar o ser acompañado por gente de tu confianza cuando te sientas en peligro. Además te permitirá ayudar a evitar agresiones tanto a conocidos como a desconocidos. // Trusted Circles aplikazioarekin zure konfidantzakoek etxera lagundu ahalko zaituzte arriskuan sentitzen bazara, baina horretaz gain esagun eta ezesagunei agresioak saiesteko aukera izango duzu.
		  
		  </p>
                  <div class="button" id="download-app1">
	            <p data-translatable>
                    <a href="#download" class="btn btn-default btn-lg custom-btn"><i class="fa fa-cloud-download"></i>Download APP</a>
		    <a href="#download" class="btn btn-default btn-lg custom-btn"><i class="fa fa-cloud-download"></i>Descargar App</a>
		    <a href="#download" class="btn btn-default btn-lg custom-btn"><i class="fa fa-cloud-download"></i>Jaitzi App</a><br><br>
		    </p>
                  </div> <!-- end .button -->
                </div> <!-- end .content -->
              </div> <!-- end .top > .container> .row> .col-md-7 -->

              <div class="col-sm-5 col-md-5">
                <div class="photo-slide">
                 <div id="carousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1" class=""></li>
                    <li data-target="#carousel" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item">
                      <img src="images/phone1.png" alt="">
                    </div>
                    <div class="item active left">
                      <img src="images/phone2.png" alt="">
                    </div>
                    <div class="item next left">
                      <img src="images/phone3.png" alt="">
                    </div>
                  </div> <!-- end .carousel-inner -->
                </div> <!-- end #carousel -->
                </div> <!-- end .photo-slide -->
              </div> <!-- end .top > .container> .row> .col-md-5 -->

            </div> <!-- end .top> .container> .row -->
          </div> <!-- end .top> .container -->
        </div> <!-- end .top -->
      </div> <!-- end .bg-color -->
    </header>
    <!-- ====== End Header Section ====== -->
    

    <!-- ====== Menu Section ====== -->
    <section id="menu">
      <div class="navigation">
        <div id="main-nav" class="navbar navbar-default" role="navigation">
          <div class="container">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="">Trusted Circles</a>
            </div> <!-- end .navbar-header -->
	    
            <div class="navbar-collapse collapse">
              <ul id="ulnav" class="nav navbar-nav navbar-right">
		      <li class="active"><a href="#top"><p data-translatable>Home // Inicio // Hasiera</p></a></li>
		      <li><a href="#features"><p data-translatable>What is? // ¿Qué es? // Zer da?</p></a></li>
		      <li><a href="#description"><p data-translatable>Description // Descripción // Deskribapena</p></a></li>
		      <li><a href="#objetivo"><p data-translatable>Objective // Objetivo // Helburua</p></a></li>
		      <li><a href="#download"><p data-translatable>Download // Descarga // Jaitzi</p></a></li>
		      <li><a href="#help"><p data-translatable>Help // Ayuda // Laguntza</p></a></li>
              </ul>
            </div><!-- end .navbar-collapse -->

          </div> <!-- end .container -->
        </div> <!-- end #main-nav -->
      </div> <!-- end .navigation -->
    </section>
    <!-- ====== End Menu Section ====== -->


    <!-- ====== Features Section ====== -->
    <section id="features">
      <div class="features section-padding" style="">
        <div class="container">

          <div class="header">
            <h1 data-translatable>A Solidarity tool // Una herramienta solidaria // Tresna solidarioa</h1>
            <p>Trusted Circles ha sido creado desde la certeza de que cualquiera puede necesitar ayuda en un momento determinado por una situación de riesgo sobrevenida, por eso no limitamos el aviso de una situación de posible peligro real exclusivamente a tus contactos.</p>
            <div class="underline">
              <i class="fa fa-briefcase"></i>
            </div>
          </div> <!-- end .container> .header -->

          <div class="row">
            <div class="col-md-4">
              <div class="featured-item-img">
                <img src="images/phone1.png" alt="">
              </div>
            </div>
            <div class="col-md-8 feature-list">
              <div class="row">

                <div class="col-sm-6 col-md-6">
                  <div class="featured-item">
                    <div class="icon">
                      <div class="icon-style"><i class="fa fa-mobile"></i></div>
                    </div> <!-- end icon -->
                    <div class="meta-text">
                      <h3>Multi plataforma</h3>
                      <p>Trusted Circles funciona tanto en Android como en iPhone.</p>
                    </div> <!-- end .meta-text -->
                  </div> <!-- end .featured-item -->
                </div> <!-- end .feature-list> .row > .col-md-6 (1st item) -->

                <div class="col-sm-6 col-md-6">
                  <div class="featured-item">
                    <div class="icon">
                      <div class="icon-style"><i class="fa fa-location-arrow"></i></div>
                    </div> <!-- end icon -->
                    <div class="meta-text">
                      <h3>Confianza</h3>
                      <p>Solo los contactos que elijas podrán acompañarte.</p>
                    </div> <!-- end .meta-text -->
                  </div> <!-- end .featured-item -->
                </div> <!-- end .feature-list> .row > .col-md-6 (2nd item) -->

                <div class="col-sm-6 col-md-6">
                  <div class="featured-item">
                    <div class="icon">
                      <div class="icon-style"><i class="fa fa-group"></i></div>
                    </div> <!-- end icon -->
                    <div class="meta-text">
                      <h3>Solidaridad</h3>
                      <p>Ante una situación de riesgo, la alerta llegará a todos los usuarios de la app que estén cerca.</p>
                    </div> <!-- end .meta-text -->
                  </div> <!-- end .featured-item -->
                </div> <!-- end .feature-list> .row > .col-md-6 (3rd item) -->

                <div class="col-sm-6 col-md-6">
                  <div class="featured-item">
                    <div class="icon">
                      <div class="icon-style"><i class="fa fa-exclamation"></i></div>
                    </div> <!-- end icon -->
                    <div class="meta-text">
                      <h3>Medidas evasivas</h3>
                      <p>Al activar la alerta sonará una alarma para avisar a la gente que esté más cerca e intentar ahuyentar al agresor.</p>
                    </div> <!-- end .meta-text -->
                  </div> <!-- end .featured-item -->
                </div> <!-- end .feature-list> .row > .col-md-6 (4th item) -->

                <div class="col-sm-6 col-md-6">
                  <div class="featured-item">
                    <div class="icon">
                      <div class="icon-style"><i class="fa fa-map-marker"></i></div>
                    </div> <!-- end icon -->
                    <div class="meta-text">
                      <h3>Precisión</h3>
                      <p>Al enviar un aviso tanto los contactos de confianza como los que estén cerca recibirán la posición exacta de quien emite la alerta.</p>
                    </div> <!-- end .meta-text -->
                  </div> <!-- end .featured-item -->
                </div> <!-- end .feature-list> .row > .col-md-6 (5th item) -->

                <div class="col-sm-6 col-md-6">
                  <div class="featured-item">
                    <div class="icon">
                      <div class="icon-style"><i class="fa fa-globe"></i></div>
                    </div> <!-- end icon -->
                    <div class="meta-text">
                      <h3>Global</h3>
                      <p>La aplicación está preparada para funcionar en cualquier parte del mundo.</p>
                    </div> <!-- end .meta-text -->
                  </div> <!-- end .featured-item -->
                </div> <!-- end .feature-list> .row > .col-md-6 (6th item) -->

              </div> <!-- end .feature-list> .row -->
            </div> <!-- end .feature-list -->
          </div> <!-- end .container> .row -->

        </div> <!-- end .container -->
      </div> <!-- end .features -->
    </section>
    <!-- ====== End Features Section ====== -->


    <!-- ====== Description Section ====== -->
    <section id="description">
      <div class="description">
        <div class="description-one section-padding" style="">
          <div class="container">
            <div class="row">
              <div class="col-sm-5 col-md-6">
                <div class="app-image">
                  <img src="images/bigphone.png" alt="">
                </div>
              </div>
              <div class="col-sm-7 col-md-6">
                <div class="content">
                  <h1>Vuelve a casa en compañía</h1>
                  <h4>Con Trusted Circles tu trayecto será más seguro</h4>
                  <p>Trusted Circles es una sencilla aplicación para poder estar acompañados cuando más podemos necesitarlo, por un lado tenemos a los contactos que hayamos añadido para que puedan acompañarnos en nuestro trayecto, haciéndoles saber en qué punto nos encontramos en tiempo real. Si percibimos algún peligro y activamos la alarma, a ellos les llegará una notificación con nuestra posición para que puedan llamar a las autoridades pertinentes o incluso, si están cerca que puedan acudir en nuestra ayuda, para que puedan socorrernos.
		  <br><br>
                  Por otro lado, en una situación de peligro, al activar la alerta todas las personas en un radio de 1km. serán avisadas de que en ese punto se está produciendo una posible situación de riesgo para que puedan acudir a evitarla.
                  </p>
                  <div class="button" id="download-app2">
                    <a href="#download" class="btn btn-default btn-lg custom-btn get-btn"><i class="fa fa-cloud-download"></i>Descargar la APP</a>
                  </div>
                </div>
              </div>
            </div> <!-- .container> .row -->
          </div> <!-- .container -->
        </div> <!-- end .description-one -->
    </section>
    <!-- ====== End Description Section ====== -->

    <section id="objetivo">
    <div class="features section-padding" style="">
        <div class="container">
            <div class="header">
                <h1>Objetivo y recomendaciones</h1>
		<ul class="fa-ul" style="text-align:left;">
			<li><h2>Objetivo:</h2></li>
		</ul>
		<div style="text-align:left;"><p>Trusted Circles es una aplicación que busca utilizar la tecnología disponible para evitar situaciones de riesgo para cualquier persona en cualquier lugar del mundo. Su única razón de ser es tratar de evitar agresiones de cualquier tipo valiéndose de la solidaridad ciudadana. Al generarse un aviso, tanto los contactos de confianza (estén donde estén) como los usuarios que se encuentren en un radio inferior a 1km. de donde se esté dando una situación de riesgo, serán notificados y podrán ver en el mapa cual es el lugar exácto y como llegar. </div><br>
               <ul class="fa-ul" style="text-align:left;">
                    <li><h2>Recomendaciones:</h2></li>
               </ul>
		<div class="panel panel-default">
                    <a class="list-group-item" data-toggle="collapse" href="#collapseTC001A">
	            <span class="badge"></span>¿Cómo actuar si recibo un aviso?</a>
	  	    <div class="panel-collapse collapse" id="collapseTC001A">
			<div class="panel-body">
				<div class="list-group-item" style="text-align:left;">Si eres un contacto de confianza, Llama a quien ha dado el aviso y pregúntale si es necesario que llames a las autoridades, en caso de que no coja el teléfono, llama directamente a las autoridades y facilítales la calle en la que se ha podido producir la agresión y el número de teléfono de quien da el aviso.</div>
				<div class="list-group-item" style="text-align:left;">Si estás cerca del lugar del aviso, acude a ese punto, preferiblemente en compañía de otra persona.</div>
				<div class="list-group-item" style="text-align:left;">Cuando estés cerca del lugar, pon el móvil a grabar vídeo porque podría resultar útil si la víctima decide denunciar.</div>
				<div class="list-group-item" style="text-align:left;">Si te encuentras con una agresión, intenta grabar la cara del agresor pero sin ponerte en peligro y bajo ninguna circunstancia te enfrentes a él dado que podría acarrearte consecuencias penales.</div>
			</div>
     	   	    </div>
        	</div>


		<div class="panel panel-default">
		    <a class="list-group-item" data-toggle="collapse" href="#collapseTC002A">
		    <span class="badge"></span>¿Cuándo debería dar el aviso?</a> 
		    <div class="panel-collapse collapse" id="collapseTC002A">
			    <div class="panel-body">
				    <div class="list-group-item" style="text-align:left;">Estamos trabajando en esta sección para tratar de ser lo más efectivos posibles. Gracias por tú paciencia.</div>
			    </div>
		    </div>
		</div>









		</p>
            </div> <!-- end .container> .header -->
	</div>
    </div>

    </section>



    <!-- ====== Subscribe Section ====== -->
<!--
    <section id="subscribe">
          <div class="social">
            <ul>
              <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li> 
              <li><a class="facebook" href=""><i class="fa fa-facebook"></i></a></li> 
              <li><a class="google-plus" href=""><i class="fa fa-google-plus"></i></a></li> 
              <li><a class="youtube" href=""><i class="fa fa-youtube"></i></a></li> 
              <li><a class="linkedin" href=""><i class="fa fa-linkedin"></i></a></li> 
              <li><a class="pinterest" href=""><i class="fa fa-pinterest"></i></a></li> 
              <li><a class="dribbble" href=""><i class="fa fa-dribbble"></i></a></li> 
              <li><a class="flickr" href=""><i class="fa fa-flickr"></i></a></li>          
            </ul>
          </div>
    </section>
-->
    <!-- ====== End Subscribe Section ====== -->


    <!-- ====== Download Section ====== -->
    <section id="download">
      <div class="bg-color">
        <div class="download section-padding" style="">
          <div class="container">

            <div class="header">
              <h1>Descarga <strong>Trusted Circles</strong> para tu móvil</h1>
              <div class="underline"><i class="fa fa-cloud-download"></i></div>
            </div> <!-- end .container > .header -->

            <div class="row download-area">

              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7" style="">
                <a href="" class="btn btn-default custom-btn download-btn">
                  <i class="fa fa-mobile"></i>
                  <div class="app-download">
                    <span>Download on the</span><strong>App Store</strong>
                  </div>
                </a>
              </div> <!-- end .download-area> .col-lg-3 (1) -->

              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="">
                <a href="https://play.google.com/store/apps/details?id=com.trustedcircles&hl=es" class="btn btn-default custom-btn download-btn">
                <img src="images/playstore.png" alt="">
                <div class="app-download">
                  <span>GET IT ON</span><strong>Google Play</strong>
                </div></a>
              </div> <!-- end .download-area> .col-lg-3 (2) -->

            </div> <!-- end .container > .row/.download-area -->

          </div> <!-- end .container -->
        </div> <!-- end .download -->
	       <div class="social" style="display:flex;justify-content: center; color:white;">
                 <ul>
			 <li><b>Síguenos:</b> <a class="facebook" href="https://www.facebook.com/trustedcircles/?fref=ts"><i class="fa fa-facebook"></i></a></li>    
                 </ul>
              </div>

      </div> <!-- end .bg-color -->
    </section>
    <!-- ====== End Download Section ====== -->

    <section id="help">
        <div class="bg-color">
            <div class="dark-bg" style="">
                <div class="container">

		    <div class="header">
                        <h1>Ayuda</h1>
                    </div> 


		<div class="col-sm-3 col-md-3">
                    <div class="item">
			    <!-- Trigger the modal with a button -->
			    <button type="button" style="border:0;" data-toggle="modal" data-target="#myModal"><img src="images/primer.png" alt=""></button>
                    </div>
                </div> 
                <div class="col-sm-3 col-md-3">
                    <div class="item">
			    <button type="button" style="border:0;" data-toggle="modal" data-target="#myModalContact"><img src="images/anadir.png" alt=""></button>
                    </div>
                </div> 


                <div class="col-sm-3 col-md-3">
                    <div class="item">
                        <button type="button" style="border:0;" data-toggle="modal" data-target="#myModalInicial"><img src="images/pantinicial.png" alt=""></button>
                    </div>
                </div>



                <div class="col-sm-3 col-md-3">
                    <div class="item">
			    <button type="button" style="border:0;" data-toggle="modal" data-target="#myModalVuelta"><img src="images/vuelta2.png" alt=""></button>
                    </div>
                </div>  			


		</div>
            </div>
        </div>

	<!-- Trigger the modal with a button -->
	<div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

         <!-- Modal content PANTALLA INICIAL-->
             <div class="modal-content">
                <div class="modal-header" style="background-color:#387ef5">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:#fff"> Primeros pasos</h4>
                </div>
                <div class="modal-body">
                    <p>
		    <!-- Menu colapsable-->
			 <div class="panel-group">
			     <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse1">1- Pantalla Inicial</a>
			            </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
					<div class="panel-body" style="display:flex;justify-content: center;"><img src="images/inicial1.png"></div>
                                            <div class="panel-footer">
						    1-. Entrar: Entra por primera vez en la aplicación, al entrar nos muestra un cuadro de diálogo para que seleccionemos nuestra cuenta de gmail.<br>
						    2-. Cómo funciona: Instrucciones de la aplicación
					    </div>
                                    </div>
                                </div>
                          </div>		    
                         <div class="panel-group">
                             <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse2">2- Seleccionar cuenta</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body" style="display:flex;justify-content: center;"><img src="images/eligecuenta1.png"></div>
                                            <div class="panel-footer">
                                                    1-. Selecciona la cuenta de Google que quieres usar<br>

                                            </div>
                                    </div>
                                </div>
                          </div>


                         <div class="panel-group">
                             <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse3">3- Permisos</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body" style="display:flex;justify-content: center;"><img src="images/permisos1.png"></div>
                                            <div class="panel-footer">
                                                    1-. Permite a Trusted Circles los permisos para obtener tu posición<br>

                                            </div>
                                    </div>
                                </div>
                          </div>


                         <div class="panel-group">
                             <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse4">4- Activar Posicionamiento</a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                        <div class="panel-body" style="display:flex;justify-content: center;"><img src="images/gps.png"></div>
                                            <div class="panel-footer">
                                                    1-. Si el GPS no está activado en modo alta precisión, aparecerá esta pantalla indicando que se modifique la configuración. Pincha en Activar.<br>
                                            </div>
					    <div class="panel-body" style="display:flex;justify-content: center;"><img src="images/accesogps.png"></div>
					    <div class="panel-footer">2-. Como se muestra en la imagen, se debe activar la opción "Acceder a mi ubicación" y el modo "Utilizar redes móviles, Wi-Fi y GPS" </div> 
                                    </div>
                                </div>
                          </div>



		    </p>
                </div>
               <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
             </div>

         </div>
      </div>
      <!-- Fin pantalla inicial-->

      <!-- Trigger the modal with a button -->
      <div id="myModalContact" class="modal fade" role="dialog">
         <div class="modal-dialog">

      <!-- Modal content PANTALLA contactos-->
      <div class="modal-content">
          <div class="modal-header" style="background-color:#387ef5">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="color:#fff">Añadir Contacto</h4>
          </div>
          <div class="modal-body">
          <p>
<!-- Menu colapsable-->
              <div class="panel-group">
                   <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse_user">Añadir Contacto</a>
                            </h4>
                        </div>
                        <div id="collapse_user" class="panel-collapse collapse">
				Los contactos deben ser de absoluta confianza, hay que tener en cuenta de que los contactos de confianza podrán ver la ruta que estamos realizando conociendo nuestra posición en tiempo real en todo momento.
                            <div class="panel-body" style="display:flex;justify-content: center;"><img src="images/contact11.png"></div>
                                    1-. Buscar: Pon la dirección de gmail del usuario que quieres añadir (debe tener TrustedCircles instalado).
				<div class="panel-footer" style="display:flex;justify-content: center;"><img src="images/contact22.png"></div>
				<div class="panel-footer"> 2-. Pincha en la Lupa para buscar a tu contacto.</div>
				 <div class="panel-body" style="display:flex;justify-content: center;"><img src="images/contact33.png"></div>
				 <div class=""> 3-. Pincha en el icono "+" para añadir al contacto (este contacto podrá hacer seguimiento de tus rutas).</div>
				</div>
                            </div>
                        </div>
                    </div>
             	   <div class="modal-footer">
	               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	           </div>
		</div>
	      </div>
      </div>

      <!-- INICIAL -->
      <!-- Trigger the modal with a button -->
    <div id="myModalInicial" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header" style="background-color:#387ef5">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" style="color:#fff">Pantalla Inicial</h4>
              </div>
              <div class="modal-body">
                  <div class="panel-group">
	               <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse_inicia">Iniciar Vuelta</a>
                                </h4>
                            </div>
                            <div id="collapse_inicia" class="panel-collapse collapse">
	                                <div class="panel-body" style="display:flex;justify-content: center;"><img src="images/inicial111.png"></div>
                                    1-. Al pinchar en "Iniciar Vuelta" se obtendrá la posición y se iniciará la grabación de la ruta a casa, para más información selecciona "Iniciar Vuelta" en la sección de ayuda.
                            </div>
	              </div>
                  </div>
                  <div class="panel-group">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse_inisos">S.O.S</a>
                                </h4>
                            </div>
                            <div id="collapse_inisos" class="panel-collapse collapse">
                                        <div class="panel-body" style="display:flex;justify-content: center;"><img src="images/inicial222.png"></div>
                                    2-. S.O.S.: Este botón debe utilizarse cuando se tenga sensación de peligro, al pulsarlo sonará una alarma por los altavoces del teléfono como medida preventiva. Además de esto, serán avisados de la situación de peligro tanto nuestros contactos de confianza como las personas que se encuentren en un radio inferior a 1km indicándoles nuestra posición.
                            </div>
                      </div>
                  </div>
                  <div class="panel-group">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse_rutas">Rutas</a>
                                </h4>
                            </div>
                            <div id="collapse_rutas" class="panel-collapse collapse">
                                        <div class="panel-body" style="display:flex;justify-content: center;"><img src="images/inicial222.png"></div>
                                    3-. Rutas: En esta sección aparecerán las rutas de las personas a las que hayamos decidido acompañar, podremos ver la ruta completada una vez finalizada o hacer un seguimiento en tiempo real.
                            </div>
                      </div>
                  </div>




              </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 </div>
             </div>
          </div>
      </div>



      <!-- VUELTA -->
      <!-- Trigger the modal with a button -->
    <div id="myModalVuelta" class="modal fade" role="dialog">
      <div class="modal-dialog">
      <!-- Modal content PANTALLA vuelta-->
          <div class="modal-content">
              <div class="modal-header" style="background-color:#387ef5">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" style="color:#fff">Iniciar vuelta</h4>
              </div>
              <div class="modal-body">
              <p>
<!-- Menu colapsable-->
                  <div class="panel-group">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse_vuelta">Empezar</a>
                                </h4>
                            </div>
                            <div id="collapse_vuelta" class="panel-collapse collapse">
				    
                                <div class="panel-body" style="display:flex;justify-content: center;"><img src="images/vuelta11.png"></div>
                                    1-. Empezar: Al pinchar en el botón Empezar, se iniciará la grabación del trayecto y los contactos de confianza recibirán una notificación, permitiéndoles ver nuestra posición en tiempo real (si es la primera vez que arranca Trusted Circles, puede llevar hasta 2 minutos en obtener la posición).
				</div>
			    </div>
		  </div>
	          <div class="panel-group">
		      <div class="panel panel-default">
		          <div class="panel-heading">
				  <h4 class="panel-title"><a data-toggle="collapse" href="#collapse_sos">S.O.S</a></h4>
		          </div>
			  <div id="collapse_sos" class="panel-collapse collapse">
                                    <div class="panel-body" style="display:flex;justify-content: center;"><img src="images/vuelta22.png"></div>
                                    <div class=""> 2-. S.O.S.: Este botón debe utilizarse cuando se tenga sensación de peligro, al pulsarlo sonará una alarma por los altavoces del teléfono como medida preventiva. Además de esto, serán avisados de la situación de peligro tanto nuestros contactos de confianza como las personas que se encuentren en un radio inferior a 1km indicándoles nuestra posición.</div>
			  </div>
		      </div>
		  </div> 
		  <div class="panel-group">
		      <div class="panel panel-default">
		          <div class="panel-heading">
		              <h4 class="panel-title"><a data-toggle="collapse" href="#collapse_sms">Mensaje</a></h4>
	    		  </div>
    			  <div id="collapse_sms" class="panel-collapse collapse">			  
                                    <div class="panel-body" style="display:flex;justify-content: center;"><img src="images/vuelta33.png"></div>
                                    <div class=""> 3-. Al pulsar en mensaje, se despliega un recuadro en el que podemos introducir un texto que quedará reflejado en el punto del trayecto que ha sido introducido y los contactos de confianza tendrán posibilidad de verlo. Está pensado para indicar a nuestros contactos que nos hemos encontrado con un conocido que nos va a llevar o acompañar a pie, así como si vamos a coger el transporte público u otras circunstancias que se den en el trayecto y queramos que nuestros contactos conozcan.</div>
				    <div class="" style="display:flex;justify-content: center;"><img src="images/vuelta44.png"></div>
			  </div>
		      </div>
		  </div>
		  <div class="panel-group">
		      <div class="panel panel-default">
		          <div class="panel-heading">
		               <h4 class="panel-title"><a data-toggle="collapse" href="#collapse_stop">Parar</a></h4>
	     	          </div>
   			  <div id="collapse_stop" class="panel-collapse collapse">			  
				    <div class="" style="display:flex;justify-content: center;"><img src="images/vuelta55.png"></div><p><br><p>
				    <div class=""> 4-. Parar: Al dar al botón "Parar", la ruta se da por finalizada y los contactos son avisados de que la ruta ha finalizado, además de esto nos permite guardar la ruta para poder consultarla después (ésta queda almacenada en perfil -> mis rutas) o descartarla si no nos interesa tener guardada la ruta que hemos realizado.</div> 

                                </div>
                            </div>
                        </div>
                    </div>
                  <div class="modal-footer">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
	  </p>
	  </div>
      </div>
    </div>



    </section>	    


    <!-- ====== Copyright Section ====== -->
    <section class="copyright dark-bg">
      <div class="container">
	      <p>&copy; 2016 <a href="#">Trusted Circles</a>, All Rights Reserved. </p>
      </div> <!-- end .container -->
    </section>
    <!-- ====== End Copyright Section ====== -->


   


    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery.min.js" ></script>
    <script src="js/jquery.js" ></script>
    
    <!-- Modernizr js -->
    <script src="js/modernizr-latest.js" ></script>

    <!-- Bootstrap 3.2.0 js -->
    <script src="js/bootstrap.min.js" ></script>

    <!-- Owl Carousel plugin -->
    <script src="js/owl.carousel.min.js" ></script>

    <!-- ScrollTo js -->
    <script src="js/jquery.scrollto.min.js" ></script>

    <!-- LocalScroll js -->
    <script src="js/jquery.localScroll.min.js" ></script>

    <!-- jQuery Parallax plugin -->
    <script src="js/jquery.parallax-1.1.3.js" ></script>

    <!-- Skrollr js plugin -->
    <script src="js/skrollr.min.js" ></script>

    <!-- jQuery One Page Nav Plugin -->
    <script src="js/jquery.nav.js" ></script>
    
    <!-- jQuery Pretty Photo Plugin -->
    <script src="js/jquery.prettyPhoto.js" ></script>


    <!-- Custom JS -->
    <script src="js/main.js"></script>
     <script src="lang/dom-i18n.js"></script>
  
     <script>

      var enButton = document.getElementById('en-btn');
      var esButton = document.getElementById('es-btn');
      var euButton = document.getElementById('eu-btn');
      var i18n = domI18n({
          selector: '[data-translatable]',
          separator: ' // ',
          languages: ['en', 'es', 'eu'],
          defaultLanguage: 'en'
          });

      enButton.onclick = function () {
              i18n.changeLanguage('en');
	            };

      esButton.onclick = function () {
          i18n.changeLanguage('es');
      };
      euButton.onclick = function () {
          i18n.changeLanguage('eu');
      };


     </script>

    <script>
      jQuery(document).ready(function($) {
        "use strict";

        jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({social_tools:false});
      });
    </script>
  </body>
  </html>
 */
?>
