<?php
   require("./classes/Database.php");
   require('./classes/Titulaciones.php');

   use classes\Database;
   use classes\Titulaciones;

   $lenguaje_get = $_GET['lang'];
   if($lenguaje_get && !file_exists('./lang/' .$lenguaje_get .'.php'))
      $lenguaje_get = 'es';
   require('lang/' .$lenguaje_get .'.php');
?>
<!doctype html>
<html lang=<?php echo $lenguaje_get ?>>
   <head>
      <meta charset="UTF-8">
      <title><?php echo $lang['titulo']; ?></title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon" />
      <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,300,300italic,700,500,500italic,700italic,400italic%7CLato:400,700,300' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css" />
      <link rel="stylesheet" href="/assets/css/animate.css" type="text/css" />
      <link rel="stylesheet" href="/assets/css/ionicons.min.css" type="text/css" />
      <link rel="stylesheet" href="/assets/css/owl.carousel.min.css" type="text/css" />
      <link rel="stylesheet" href="/assets/css/owl.transitions.css" type="text/css" />
      <link rel="stylesheet" href="/assets/css/magnific-popup.css" type="text/css" />
      <link rel="stylesheet" href="/style.css" type="text/css" />
   </head>

   <body>
      <div id="loader">
         <div class="box-one"></div>
         <div class="box-two"></div>
         <div class="box-three"></div>
         <div class="box-four"></div>
      </div>

      <nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_pagina">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand"><?php echo $lang['titulo']; ?></a>
            </div>
            <div class="navbar-collapse collapse" id="menu_pagina">
               <ul class="nav navbar-nav">
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Accesos rápidos
                        <span class="caret"></span>
                     </a>
                     <ul class="dropdown-menu">
                        <li> <a href="#Informacion"><?php echo $lang['menu_texto_informacion']; ?></a> </li>
                        <li> <a href="#Educacion"><?php echo $lang['menu_texto_estudios']; ?></a> </li>
                        <li> <a href="#Contacto"><?php echo $lang['menu_texto_contacto']; ?></a> </li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $lang['menu_texto_idiomas']; ?>
                        <span class="caret"></span>
                     </a>
                     <ul class="dropdown-menu">
                        <li><a href="/es"><?php echo $lang['menu_texto_idiomas_castellano']; ?></a></li>
                        <li><a href="/ca"><?php echo $lang['menu_texto_idiomas_catalan']; ?></a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </nav>

      <section id="home" class="header">
         <div class="sector">
            <h1 class="main-title">Alvaro Prendes</h1>
            <h4 class="tagline">Desarrollador / Programador</h4>
         </div>
      </section>

      <section id="Informacion">
         <h1 class="section-big-title til hidden-xs hidden-sm" data-in-effect="fadeInUp" data-out-effect="fadeInDown">Información</h1>
         <div class="container">
            <div class="row">
               <div class="col-sm-4 col-sm-push-8">
                  <div class="section-holder texture">
                     <div class="img-holder">
                     	<img src="https://instagram.fmad3-1.fna.fbcdn.net/vp/f9a06f9e3f530b6c0913bd51bcb15b86/5C41A376/t51.2885-19/s150x150/41820001_1881338575290669_8777588477735731200_n.jpg" class="img-responsive img-circle" alt="Foto Personal">
                     </div>
                     <div class="sep-mini"></div>
                     <h4><?php echo $lang['informacion_nombre']; ?>: Alvaro Prendes</h4>
                     <h4><?php echo $lang['informacion_nacionalidad']; ?>: Española</h4>
                     <div class="social-links">
                        <a href="https://twitter.com/salesprendes"><i class="ion-social-twitter-outline i-size-small"></i></a>
                        <a href="https://www.facebook.com/salesprendes"><i class="ion-social-facebook-outline i-size-small"></i></a>
                        <a href="https://www.instagram.com/_.alvaro.prendes._/"><i class="ion-social-instagram-outline i-size-small"></i></a>
                        <a href="https://github.com/salesprendes"><i class="ion-social-github-outline i-size-small"></i></a>
                     </div>
                     <a class="tooltip-cl cv-download mfp-iframe popup-it" data-tooltip="Descargar currículum" href="./Curriculum.pdf">
                        <i class="ion-ios-download-outline i-size-small"></i>
                     </a>
                  </div>
               </div>

               <div class="col-sm-8 col-sm-pull-4">
                  <div class="section-holder">
                     <div class="icon-holder i-size-big">
                        <i class="ion-ios-compose-outline"></i>
                     </div>
                     <h3 class="section-title"><?php echo $lang['panel_presentacion_titulo']; ?></h3>
                     <p align="justify"><?php echo $lang['panel_presentacion_texto']; ?></p>
                     <p align="justify">"<?php echo $lang['panel_presentacion_frase']; ?>"</p>
                     <div class="icon-holder i-size-small">
                        <i class="ion-ios-baseball-outline"></i>
                     </div>
                     <h4>Hobbies</h4>
                     <p>Gaming | Programación | Deporte | Autoaprendizaje</p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section id="Educacion">
         <h1 class="section-big-title til hidden-xs hidden-sm" data-in-effect="fadeInUp" data-out-effect="fadeInDown">Educación</h1>
         <div class="container">
            <div class="row">
               <div class="col-sm-4">
                  <div class="section-holder texture">
                     <div class="icon-holder i-size-big">
                        <i class="ion-ios-star-outline"></i>
                     </div>
                     <h3>Habilidades Profesionales</h3>
                     <div class="skill-holder">
                        <div class="skill-area">
                           <div class="skillbar clearfix" data-percent="50%">
                              <div class="skillbar-title">
                                 <span>CSS</span>
                              </div>
                              <div class="skillbar-bg">
                              </div>
                              <div class="skillbar-bar to-animate">
                              </div>
                              <div class="skill-bar-percent">
                                 50%
                              </div>
                           </div>
                           <div class="skillbar clearfix" data-percent="100%">
                              <div class="skillbar-title">
                                 <span>HTML | PHP | Bootstrap</span>
                              </div>
                              <div class="skillbar-bg">
                              </div>
                              <div class="skillbar-bar to-animate">
                              </div>
                              <div class="skill-bar-percent">
                                 100%
                              </div>
                           </div>
                           <div class="skillbar clearfix" data-percent="100%">
                              <div class="skillbar-title">
                                 <span>Windows | Linux | MacOS</span>
                              </div>
                              <div class="skillbar-bg">
                              </div>
                              <div class="skillbar-bar to-animate">
                              </div>
                              <div class="skill-bar-percent">
                                 100%
                              </div>
                           </div>
                           <div class="skillbar clearfix" data-percent="70%">
                              <div class="skillbar-title">
                                 <span>Pentesting</span>
                              </div>
                              <div class="skillbar-bg">
                              </div>
                              <div class="skillbar-bar to-animate">
                              </div>
                              <div class="skill-bar-percent">
                                 70%
                              </div>
                           </div>
                        </div>
                        <div class="skill-area">
                           <div class="skillbar clearfix" data-percent="95%">
                              <div class="skillbar-title">
                                 <span>Java</span>
                              </div>
                              <div class="skillbar-bg">
                              </div>
                              <div class="skillbar-bar">
                              </div>
                              <div class="skill-bar-percent">
                                 95%
                              </div>
                           </div>
                           <div class="skillbar clearfix" data-percent="70%">
                              <div class="skillbar-title">
                                 <span>c++</span>
                              </div>
                              <div class="skillbar-bg">
                              </div>
                              <div class="skillbar-bar">
                              </div>
                              <div class="skill-bar-percent">
                                 70%
                              </div>
                           </div>
                           <div class="skillbar clearfix" data-percent="65%">
                              <div class="skillbar-title">
                                 <span>Xcode</span>
                              </div>
                              <div class="skillbar-bg">
                              </div>
                              <div class="skillbar-bar">
                              </div>
                              <div class="skill-bar-percent">
                                 65%
                              </div>
                           </div>
                           <div class="skillbar clearfix" data-percent="90%">
                              <div class="skillbar-title">
                                 <span>c#</span>
                              </div>
                              <div class="skillbar-bg">
                              </div>
                              <div class="skillbar-bar">
                              </div>
                              <div class="skill-bar-percent">
                                 90%
                              </div>
                           </div>
                        </div>
                        <div class="skill-area">
                           <div class="skillbar clearfix" data-percent="40%">
                              <div class="skillbar-title">
                                 <span>Angular-4 | Ionic-3</span>
                              </div>
                              <div class="skillbar-bg">
                              </div>
                              <div class="skillbar-bar">
                              </div>
                              <div class="skill-bar-percent">
                                 40%
                              </div>
                           </div>
                           <div class="skillbar clearfix" data-percent="80%">
                              <div class="skillbar-title">
                                 <span>SQL / Injection</span>
                              </div>
                              <div class="skillbar-bg">
                              </div>
                              <div class="skillbar-bar">
                              </div>
                              <div class="skill-bar-percent">
                                 80%
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-sm-8">
                  <div class="section-holder">
                     <div class="icon-holder i-size-big">
                        <i class="ion-ios-lightbulb-outline"></i>
                     </div>
                     <h3> Estudios formales</h3>
                     <div class="time-line">
                        <div class="row">
                           <?php $titulaciones = new Titulaciones(); ?>
                           <?php foreach($titulaciones -> get_Obtener_Todas_Titulaciones() as $fila): ?>
                              <?php if($fila): ?>
                                 <div class="col-sm-12">
                                    <div class="time-item">
                                       <div class="time-year">
                                          20<?php echo $fila['fecha_comienzo_estudios']; ?>
                                          <?php if($fila['fecha_fin_estudios'] != null): ?>&nbsp;-&nbsp;20<?php echo $fila['fecha_fin_estudios']; ?> 
                                          <?php endif; ?>
                                       </div>
                                       <div class="icon-holder-time wow fadeIn">
                                          <i class="ion-ios-circle-outline"></i>
                                       </div>
                                       <h4 class="time-title">
                                          <?php echo $fila['nombre_titulo']; ?>
                                       </h4>
                                       <h5 class="time-semitag">
                                          Calificación final:&nbsp;
                                          <?php
                                             if($fila['calificacion_estudios'] != null)
                                                echo str_replace('.', ',', $fila['calificacion_estudios']);
                                             else
                                                echo 'Actualmente en curso';
                                          ?> 
                                       </h5>
                                       <h5 class="time-semitag">
                                          <?php echo $fila['nombre_centro_estudios']; ?>,&nbsp;
                                          <?php echo $fila['poblacion_centro_estudios']; ?>,&nbsp;
                                          <?php echo $fila['provincia_centro_estudios']; ?>
                                       </h5>
                                    </div>
                                 </div>
                              <?php else: ?>
                                 <h1>No hay estudios disponibles</h1>
                              <?php endif; ?>
                           <?php endforeach; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section id="Contacto">
         <h1 class="section-big-title til hidden-xs hidden-sm" data-in-effect="fadeInUp" data-out-effect="fadeInDown">Contacto</h1>
         <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="section-holder texture">
                        <div class="icon-holder i-size-big">
                            <i class="ion-ios-wineglass-outline"></i>
                        </div>
                        <h3>Localización</h3>
                        <h5>Dirección: Carrer de Pau Casals, 12, Salt, Girona</h5>
                        <h5>Email: salesprendes@gmail.com</h5>
                        <h5>Móvil: 616 729 303</h5>
                        <a href="https://maps.google.com/maps?q=Carrer+de+Pau+Casals,+12,+17190+Salt,+Girona" class="mfp-iframe popup-it"><h4 class="map-open"><i class="ion-map i-size-small"></i></h4></a>
                        <div class="social-links">
                           <a href="https://twitter.com/salesprendes"><i class="ion-social-twitter-outline i-size-small"></i></a>
                           <a href="https://www.facebook.com/salesprendes"><i class="ion-social-facebook-outline i-size-small"></i></a>
                           <a href="https://www.instagram.com/_.alvaro.prendes._/"><i class="ion-social-instagram-outline i-size-small"></i></a>
                           <a href="https://github.com/salesprendes"><i class="ion-social-github-outline i-size-small"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="section-holder">
                        <div class="icon-holder i-size-big">
                            <i class="ion-ios-email-outline"></i>
                        </div>
                        <h3>Contacto</h3>
                        <form class="form-horizontal" id="form_contacto">
                            <div class="form-group">
                               <div class="col-sm-6">
                                   <input type="text" class="form-control" id="nombre_input" placeholder="Tu Nombre" required>
                                    <span class="form-control-feedback">
                                        <i class="ion-ios-grid-view-outline"></i>
                                    </span>
                                </div>

                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="correo_input" placeholder="Tu correo" required>
                                    <span class="form-control-feedback">
                                        <i class="ion-ios-grid-view-outline"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="movil_input" placeholder="Teléfono móvil (Opcional)">
                                    <span class="form-control-feedback">
                                        <i class="ion-ios-grid-view-outline"></i>
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="titulo_input" placeholder="Título" required>
                                    <span class="form-control-feedback">
                                        <i class="ion-ios-grid-view-outline"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group message">
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="input_mensaje" rows="4" placeholder="Mensaje" required></textarea>
                                    <span class="form-control-feedback">
                                        <i class="ion-ios-grid-view-outline"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <button type="submit" id="form-submit" class="btn btn-cl">Enviar Mensaje</button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </div>
            </div>
         </div>
      </section>

      <?php include './footer.php'; ?>

      <script src="/assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
      <script src="/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
      <script src="/assets/js/jquery.lettering.js" type="text/javascript"></script>
      <script src="/assets/js/jquery.textillate.js" type="text/javascript"></script>
      <script src="/assets/js/owl.carousel.min.js" type="text/javascript"></script>
      <script src="/assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
      <script src="/assets/js/jquery.counterup.js" type="text/javascript"></script>
      <script src="/assets/js/wow.min.js" type="text/javascript"></script>
      <script src="/assets/js/smoothscroll.js" type="text/javascript"></script>
      <script src="/assets/js/jquery.nav.js" type="text/javascript"></script>
      <script src="/assets/js/validator.min.js" type="text/javascript"></script>
      <script src="/assets/js/script.js" type="text/javascript"></script>
      <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="/assets/js/contacto.js" type="text/javascript"></script>

      <script type="text/javascript">
         $(window).on('load', function()
         {
            $("#loader").delay(2000).fadeOut("slow");
         });
      </script>
   </body>

   <script>
      $(document).ready(function()
      { 
        $('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').remove();
      });
   </script>
</html>