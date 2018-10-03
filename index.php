<?php 
   require("./classes/database.php");
   require("./classes/titulaciones.php");

   use classes\database;
   use classes\titulaciones;
?>
<!doctype html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Página Personal - Alvaro Prendes</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
      <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,300,300italic,700,500,500italic,700italic,400italic%7CLato:400,700,300' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="./assets/css/bootstrap.min.css" type="text/css" />
      <link rel="stylesheet" href="./assets/css/animate.css" type="text/css" />
      <link rel="stylesheet" href="./assets/css/ionicons.min.css" type="text/css" />
      <link rel="stylesheet" href="./assets/css/owl.carousel.min.css" type="text/css" />
      <link rel="stylesheet" href="./assets/css/owl.transitions.css" type="text/css" />
      <link rel="stylesheet" href="./assets/css/magnific-popup.css" type="text/css" />
      <link rel="stylesheet" href="./style.css" type="text/css" />
   </head>

   <body>
      <div id="loader">
         <div class="box-one"></div>
         <div class="box-two"></div>
         <div class="box-three"></div>
         <div class="box-four"></div>
      </div>

      <nav class="menu">
         <ul class="menu-ul">
            <li> <a href="#Informacion">Acerca de mí</a> </li>
            <li> <a href="#Educacion">Educación</a> </li>
            <li> <a href="#Contacto">Contacto</a> </li>
         </ul>
         <div class="menu-holder">
            <div class="menu-bar"></div>
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
                     <h4> Nombre: Alvaro Prendes </h4>
                     <h4> Nacionalidad: Española </h4>
                     <div class="social-links">
                        <a href="https://twitter.com/salesprendes"><i class="ion-social-twitter-outline i-size-small"></i></a>
                        <a href="https://www.facebook.com/salesprendes"><i class="ion-social-facebook-outline i-size-small"></i></a>
                        <a href="https://www.instagram.com/_.alvaro.prendes._/"><i class="ion-social-instagram-outline i-size-small"></i></a>
                        <a href="https://github.com/salesprendes"><i class="ion-social-github-outline i-size-small"></i></a>
                     </div>
                     <a class="tooltip-cl cv-download" data-tooltip="Descargar curriculum" href="#" onclick="window.open('Curriculum.pdf')">
                        <i class="ion-ios-download-outline i-size-small"></i> 
                     </a>
                  </div>
               </div>

               <div class="col-sm-8 col-sm-pull-4">
                  <div class="section-holder">
                     <div class="icon-holder i-size-big">
                        <i class="ion-ios-compose-outline"></i>
                     </div>
                     <h3 class="section-title">Acerca de mí</h3>
                     <p>
                        Bienvenido/a a mi sitio web. Me encanta la informática sobretodo el ámbito de la programación, mi otra gran pasión es el pentesting, también tengo experiencia en la seguridad de servidores escalar permisos y rootearlos. Con mi experiencia personal he adquirido conocimientos sobre deface web por inyección SQL y xPath, otros pequeños conocimientos sobre DDOS por sockets. Se podría decir que me encanta la programación ligada a la seguridad ya que es entretenida y casi nunca hay un fin.
                     </p>
                     <p>
                     	"El mayor enemigo de la seguridad informática son los usuarios"
                     </p>
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
                           <?php $titulaciones = new titulaciones(); ?>
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
                        <a href="https://maps.google.com/maps?q=Carrer+de+Pau+Casals,+12,+17190+Salt,+Girona" class="mfp-iframe popup-it"><h4 class="map-open">Abrir mapa</h4></a>
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

      <script src="./assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
      <script src="./assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
      <script src="./assets/js/jquery.lettering.js" type="text/javascript"></script>
      <script src="./assets/js/jquery.textillate.js" type="text/javascript"></script>
      <script src="./assets/js/owl.carousel.min.js" type="text/javascript"></script>
      <script src="./assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
      <script src="./assets/js/jquery.counterup.js" type="text/javascript"></script>
      <script src="./assets/js/wow.min.js" type="text/javascript"></script>
      <script src="./assets/js/smoothscroll.js" type="text/javascript"></script>
      <script src="./assets/js/jquery.nav.js" type="text/javascript"></script>
      <script src="./assets/js/validator.min.js" type="text/javascript"></script>
      <script src="./assets/js/script.js" type="text/javascript"></script>
      <script src="./assets/js/contacto.js"></script>

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