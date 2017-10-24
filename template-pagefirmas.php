<?php /* Template Name: pagefirmas */ ?>
<html>
<head>
	<title></title>
	  <!-- Compiled and minified CSS 
  <link rel="stylesheet" href="twentyseventeen/materialize/css/materialize.min.css">-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/materialize.min.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/materialize.css" type="text/css" />
 <!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
 <?php get_header(); ?>

 <div class="container">
                                <div class="row">
									<div class="input-group col s12 ">
                                        <nav>
						   					 <div class="nav-wrapper purple">
						    					  <a href="#" class="brand-logo right"> </a>
						     						 <ul id="nav-mobile" class="left hide-on-med-and-down">
						       							 <li><a href="http://34.214.93.195/">INICIO</a></li>
						        						 <li><a href="http://34.214.93.195/ingresarfirmas/">REGISTRO DE FIRMAS</a></li>
						        						<li><a href="collapsible.html"></a></li>
 										 </nav>
									 </div>
                                </div>
                        </div>
</head>
<body>
      <center><h4 class="truncate">Descarga de Formulario de Registro</h4>
        </center>
			<div class="wrap">
					<form  action="/modeloformulario"  method="POST">
					    	<div class="container">
							      <div class="row">
										<div class="input-group col s6 ">
											<label class="label" for="nombre">Nombre:</label>
								         	 <input type="text" id="nombre" name="txtnombre"  required>
								        </div>
										<div class="input-group col s6">
												<label class="label" for="apellido">Apellidos:</label>
								         		 <input type="text" id="apellido" name="apellido"  required>
								        </div>
								       <div class="row">
											<div class="input-group col s6">
												<label class="label" for="cedula">Cedula:</label>
								         		 <input type="text" id="cedula" name="cedula"  required>
									       	</div>
										    <div class="input-group col s6">
													<label class="label" for="correo">Correo:</label>
										         	<input type="email" id="correo" name="correo"  required>
									        </div>
								        </div>


								        <!-- CODIGO MODIFICADO -->


								        <div class="input-group col s6">
									       			<button class="btn waves-effect waves-light" type="submit" name="action">Descargar
	   												 	<i class="material-icons right">archive</i> 
	  												</button> 
	  									</div>
	  										<div class="input-group col s6">
	  												<a class="btn waves-effect waves-light blue" type="btn" href="http://34.214.93.195/">Regresar
	   												 	<i class="material-icons right">home</i> 
	  												</a>
	  										
  											</div>

  										<!-- hasta aqui -->
							      </div>
							        <div class="progress">
     									 <div class="determinate" style="width: 70%"></div>
  									</div>
					     </div>
				</form>	  
</div>
  <script src="wp-content/themes/twentyseventeen/jquery.min.js" ></script>
 <script src="wp-content/themes/twentyseventeen/materialize.min.js" ></script>
</body>
</html>
