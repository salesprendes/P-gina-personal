<?php
   require("./classes/database.php");
   require('./classes/titulaciones.php');
   require('./classes/habilidades.php');

   use classes\Database;
   use classes\Titulaciones;
   use classes\Habilidades;

   $lenguaje_get = $_GET['lang'];
   if($lenguaje_get && !file_exists('./lang/' .$lenguaje_get .'.php'))
      $lenguaje_get = 'es';
   require('lang/' .$lenguaje_get .'.php');
?>
<!doctype html>
<html lang="<?php echo $lenguaje_get ?>" >
   <head>
      <meta charset="UTF-8">
      <title><?php echo $lang['titulo']; ?></title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width">
	  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
      <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
	  <!-- Parte SEO -->
	  <link rel="alternate" hreflang="es" href="http://www.salesprendes.com/es/" />
      <link rel="alternate" hreflang="ca" href="http://www.salesprendes.com/ca/">
	  <link rel="alternate" hreflang="x-default" href="http://www.salesprendes.com/" />
      <meta name="description" content="Bienvenido/a a salesprendes.com. Aquí podrás encontrar los aspectos más relevantes de mi vida. Soy un aficionado a las nuevas tecnologías, especialmente en el campo de la programación">
      <link rel="canonical" href="http://www.salesprendes.com/">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width">
      <meta property="og:locale" content="es">
      <meta property="og:type" content="website">
      <meta property="og:title" content="Currículum - Álvaro Ramón Prendes Sales">
      <meta property="og:description" content="Bienvenido/a a salesprendes.com. Aquí podrás encontrar los aspectos más relevantes de mi vida. Soy un aficionado a las nuevas tecnologías, especialmente en el campo de la programación">
      <meta property="og:url" content="http://www.salesprendes.com/">
      <meta property="og:site_name" content="Álvaro Ramón Prendes Sales">
	  <!-- Fin parte SEO -->
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.min.css">
	  <link rel="stylesheet" href="/assets/css/estilo.css" type="text/css">
   </head>

   <body>
   
	<nav class="navbar navbar-expand-lg bg-body-secondary" data-bs-theme="dark">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarColor01">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#"><?php echo $lang['nombre_principal']; ?></a>
					</li>
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbar_accesos" role="button" data-bs-toggle="dropdown" aria-expanded="false">Accesos rápidos</a>
						<ul class="dropdown-menu" aria-labelledby="navbar_accesos">
							<li><a class="dropdown-item" href="#Informacion"><?php echo $lang['menu_texto_informacion']; ?></a></li>
							<li><a class="dropdown-item" href="#Educacion"><?php echo $lang['menu_texto_estudios']; ?></a></li>
							<li><a class="dropdown-item" href="#Contacto"><?php echo $lang['menu_texto_contacto']; ?></a></li>
						</ul>
					</li>
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbar_idiomas" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $lang['menu_texto_idiomas']; ?></a>
						<ul class="dropdown-menu" aria-labelledby="navbar_idiomas">
							<li><a class="dropdown-item" href="/es"><?php echo $lang['menu_texto_idiomas_castellano']; ?></a></li>
							<li><a class="dropdown-item" href="/ca"><?php echo $lang['menu_texto_idiomas_catalan']; ?></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<section id="home" class="header">
		<div class="sector">
			<h1 class="main-title">Alvaro Prendes</h1>
			<h2 class="tagline">Desarrollador / Programador</h2>
		</div>
	</section>

	<section id="Informacion">
		<h1 class="section-big-title d-none d-xl-block">Información</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 order-last">
					<div class="section-holder texture">
						<div class="img-holder">
							<img src="/assets/images/me.webp" loading="lazy" class="img-fluid rounded mx-auto d-block" width="200" height="200" alt="Alvaro_Prendes">
						</div>
						
						<p style="text-align:justify;"><b><?php echo $lang['informacion_nombre']; ?>:</b> Alvaro Ramon Prendes Sales</p>
						<p style="text-align:justify;"><b><?php echo $lang['informacion_nacionalidad']; ?>:</b> <?php echo $lang['informacion_tipo_nacionalidad']; ?></p>
						
						<div class="social-links">
							<a href="https://twitter.com/salesprendes" aria-label="Acceder a mi twitter"><i class="bi bi-twitter i-size-small"></i></a>
							<a href="https://www.facebook.com/salesprendes" aria-label="Acceder a mi facebook"><i class="bi bi-facebook i-size-small"></i></a>
							<a href="https://github.com/salesprendes" aria-label="Acceder a mi github"><i class="bi bi-github i-size-small"></i></a>
						</div>
						
						<a data-bs-toggle="modal" data-bs-target="#modal_cv" class="tooltip-cl cv-download" data-tooltip="Descargar currículum" aria-label="Descargar mi currículum" href="">
							<i class="bi bi-file-arrow-down i-size-small"></i>
						</a>
						
						<!-- Modal CV -->
						<div class="modal fade" id="modal_cv" tabindex="-1" aria-labelledby="titulo_modal_cv" aria-hidden="true">
							<div class="modal-dialog modal-xl">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="titulo_modal_cv">Currículum Vitae</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
									</div>
										
									<div class="modal-body">
										<iframe src="https://drive.google.com/file/d/1jphaMbe-AzfK8cCGfbTgHZhz0jF13Whw/preview" style="width:100%;height:28.5em;"></iframe>
									</div>
																		
									<div class="modal-footer">
										<button class="btn btn-cl" type="button" onClick="location.href='https://drive.google.com/uc?export=download&id=1jphaMbe-AzfK8cCGfbTgHZhz0jF13Whw'"><i class="bi bi-download"></i> Descargar</button>
										<button class="btn btn-cl" type="button" data-bs-dismiss="modal">Cerrar</button>
									</div>
								</div> <!-- modal-content -->
							</div> <!-- modal-dialog modal-xl -->
						</div> <!-- modal fade -->
						<!-- FIN Modal CV -->
					</div>
				</div>

				<div class="col-sm-8 order-first">
					<div class="section-holder">
						<div class="icon-holder i-size-big">
							<i class="bi bi-pencil-square"></i>
						</div>
						
						<h2><?php echo $lang['panel_presentacion_titulo']; ?></h2>
						<p style="text-align:justify;"><?php echo $lang['panel_presentacion_texto']; ?></p>
						<p style="text-align:justify;">"<?php echo $lang['panel_presentacion_frase']; ?>"</p>
						
						<div class="icon-holder i-size-small">
							<i class="bi bi-controller"></i>
						</div>
						
						<h3>Hobbies</h4>
						<p>Gaming | Programación | Deporte | Autoaprendizaje</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="Educacion">
		<h1 class="section-big-title d-none d-xl-block">Educación</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="section-holder texture">
						<div class="icon-holder i-size-big">
							<i class="bi bi-star"></i>
						</div>
						
						<h2>Habilidades Profesionales</h2>
						<?php $habilidades = new Habilidades(); ?>
						<?php foreach($habilidades -> get_Obtener_Todas_Habilidades() as $fila): ?>
							<?php if($fila): ?>
								<?php echo $fila['nombre']; ?>
						
								<div class="progress">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: <?php echo $fila['porcentaje']; ?>%;" aria-valuenow="<?php echo $fila['porcentaje']; ?>" aria-valuemin="0" aria-valuemax="100">
										<?php echo $fila['porcentaje']; ?>%
									</div>
								</div>
							<?php else: ?>
								<h1>No hay habilidades disponibles</h1>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
				
				<div class="col-sm-8">
					<div class="section-holder">
						<div class="icon-holder i-size-big">
							<i class="bi bi-lightbulb"></i>
						</div>
						
						<h2><?php echo $lang['menu_texto_estudios']; ?></h2>
						<div class="time-line">
							<div class="row">
								<?php $titulaciones = new Titulaciones(); ?>
								<?php foreach($titulaciones -> get_Obtener_Todas_Titulaciones() as $fila): ?>
									<?php if($fila): ?>
										<div class="col-sm-last">
											<div class="time-item">
												<div class="time-year">
													<?php echo date("m/Y", strtotime($fila['fecha_comienzo_estudios'])); ?>
													
													<?php 
														if($fila['fecha_fin_estudios'] != null): ?> 
															- <?php echo date("m/Y", strtotime($fila['fecha_fin_estudios']));
													?>
													<?php endif; ?>
												</div>
												
												<div class="icon-holder-time">
													<i class="bi bi-circle"></i>
												</div>
												
												<h3>
													<?php echo $fila['nombre']; ?>
												</h3>
												
												<h4>
													Calificación final:&nbsp;
													<?php
														if($fila['calificacion'] != null)
															echo $fila['calificacion'];
														else
															echo 'Actualmente en curso';
													?>
												</h4>
												
												<h5>
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
		<h1 class="section-big-title d-none d-xl-block">Contacto</h1>
		
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="section-holder texture">
						<div class="icon-holder i-size-big">
							<i class="bi bi-geo-alt"></i>
						</div>
						
						<h2>Localización</h2>
						<p style="text-align:justify;"><b>Localidad:</b> Llagostera, Girona</p>
						<p style="text-align:justify;"><b>Correo Electronico:</b> salesprendes@gmail.com</p>
						<p style="text-align:justify;"><b>Télefono:</b> +34 611 132 137</p>
						<a data-bs-toggle="modal" data-bs-target="#modal_localizacion" href="" aria-label="Ver la Localización"><div class="map-open"><i class="bi bi-map i-size-small"></i></div></a>

						<div class="modal fade" id="modal_localizacion" tabindex="-1" aria-labelledby="titulo_modal_ubicacion" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="titulo_modal_ubicacion">Localización</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
									</div>
										
									<div class="modal-body">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23785.37359507783!2d2.856700984855378!3d41.824600767749246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12bb1c5ebdd53059%3A0x174d79424a2c3507!2s17240%20Llagostera%2C%20Girona!5e0!3m2!1ses!2ses!4v1676299138277!5m2!1ses!2ses" style="width:100%;height:15em;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									</div>
																		
									<div class="modal-footer">
										<button class="btn btn-cl" type="button" data-bs-dismiss="modal">Cerrar</button>
									</div>
								</div> <!-- modal-content -->
							</div> <!-- modal-dialog modal-sm -->
						</div> <!-- modal fade -->
						<!-- FIN Modal CV -->
					</div>
				</div>

				<div class="col-sm-8">
					<div class="section-holder">
						<div class="icon-holder i-size-big">
							<i class="bi bi-envelope"></i>
						</div>
						
						<h2>Contacto</h2>
						<form id="form_contacto" onsubmit="submitForm()">
							<div class="row">
								<div class="col-sm-6 order-first">
									<input type="text" class="form-control" id="nombre_contacto" placeholder="Tu Nombre" required>
									
									<span class="form-control-feedback">
										<i class="ion-ios-grid-view-outline"></i>
									</span>
								</div>

								<div class="col-sm-6 order-last">
									<input type="email" class="form-control" id="correo_contacto" placeholder="Tu correo" required>
									
									<span class="form-control-feedback">
										<i class="ion-ios-grid-view-outline"></i>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6 order-first">
									<input type="text" class="form-control" id="movil_contacto" placeholder="Teléfono móvil (Opcional)">
									
									<span class="form-control-feedback">
										<i class="ion-ios-grid-view-outline"></i>
									</span>
								</div>
								
								<div class="col-sm-6 order-Last">
									<input type="text" class="form-control" id="asunto_contacto" placeholder="Asunto" required>
									<span class="form-control-feedback">
										<i class="ion-ios-grid-view-outline"></i>
									</span>
								</div>
							</div>
														
							<div class="row">
								<div class="col-sm-12">
									<textarea class="form-control" id="mensaje_contacto" rows="4" placeholder="Mensaje" required></textarea>
									
									<span class="form-control-feedback">
										<i class="ion-ios-grid-view-outline"></i>
									</span>
								</div>
							</div>
														
							<div class="row">
								<button type="submit" id="form-submit" class="btn btn-cl">Enviar Mensaje</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php include './footer.php'; ?>
	  
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   </body>
</html>