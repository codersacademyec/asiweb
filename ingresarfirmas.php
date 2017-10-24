<?php  /* Template Name: ingresarfirmas */ ?>
<html>
	<head>
	<title></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/materialize.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/materialize.css" type="text/css" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		 <?php get_header(); ?>
	</head>
                        <div class="container">
                                <div class="row">
									<div class="input-group col s12 ">
                                        <nav>
						   					 <div class="nav-wrapper purple">
						    					  <a href="#" class="brand-logo right"> </a>
						     						 <ul id="nav-mobile" class="left hide-on-med-and-down">
						       							 <li><a href="http://34.214.93.195/">INICIO</a></li>
						        						 <li><a href="http://34.214.93.195/formulario/">DESCARGA DE FORMULARIO</a></li>
						        						<li><a href="collapsible.html"></a></li>
 										 </nav>
									 </div>
                                </div>
                        </div>
		<body>
<center><h4 class="truncate">Descarga de Formulario de Registro</h4></center>
			<form method="post" action="/ingresarfirmas" />
				<div class="container">
					<div class="row">
						<div class="input-group col s3">
				            <label class=""></label>
				        </div>
						<div class="input-group col s3 ">
							<label class="label" for="nombre">CEDULA:</label>
								<input type="tel" name="cedula" placeholder="Numero de Cedula" required>
						</div>
						<div class="input-group col s3">
			            			<button class="waves-effect waves-light btn pink" type="submit" value="submit" onclick="insert()">Consultar
				 					<i class="material-icons right">compare_arrows</i>
								</button>
			            </div>
			            <div class="input-group col s3">
				            <label class=""></label>
				        </div>
			        </div>
			    </div>				
			</form>
			<?php 
				   $cedulas =$_POST['cedula'];
					$firmas = $wpdb->get_results
					( 
						"
						SELECT * 
						FROM wp_usuario_formulario where cedula = $cedulas
						"
					);

					foreach ( $firmas as $firma ) 
					{
						$nombres = $firma->nombres;
						$apellidos = $firma->apellidos;
						$cedulas = $firma->cedula;
						$correos = $firma->correo;

					}

					function insert() 
					{
					      $firma=$_POST['firmas'];
					      $getcedulas=$_POST['getcedula'];
					      $informacion="";

					  	if ($cedulas == ""){
					       $error = "Deve introducir todo los datos";
					}


						global $wpdb;

				    $formulariouser = $wpdb->insert('wp_registro_firmas', array('cedula' => $getcedulas,'firmas' => $firma ),array('%s','%s'));
				 
				}    

					if (isset($_POST['firmas'])){ //If it is the first time, it does nothing   
					  insert();
					}
			?>
			<div class="wrap">
				<form action="/ingresarfirmas" method="post">
					<div class="container">
				      	<div class="row">
				      		<div class="input-group col s6 ">
								<label class="label" for="nombre">Nombre:</label>
								<input value="<?php echo $nombres;?>"> 
							</div>
							<div class="input-group col s6">
								<label class="label" for="apellido">Apellidos:</label>
				         		 <input value="<?php echo $apellidos;?>">
				        	</div>
						</div>
					    <div class="row">
							<div class="input-group col s6">
								<label class="label" for="cedula">Cedula:</label>
				         		 <input name="getcedula" placeholder="Ingrese su Numero de Cedula" value="<?php echo $cedulas;?>" >
					       	</div>
						    <div class="input-group col s6">
									<label class="label" for="correo">Correo:</label>
						         	<input value="<?php echo $correos;?>">
					        </div>
					    </div>
				       	<div class="row">
				       		 <div class="input-group col s4">
				            	<label class=""></label>
				            </div>
				            <div class="input-group col s4">
				            	<label class="label">Ingresar Firmas:</label>
				                <input type="number" name="firmas"  required>
				            </div>
				            <div class="input-group col s4">
				            	<label class=""></label>
							 </div>
					        <!-- CODIGO MODIFICADO AGREGAR BOTON DE REGRESAR -->


					       <div class="row">
					       		<div class="input-group col s6">
									<button class="btn waves-effect waves-light"input type="submit" value="submit" onclick="insert()">Registrar
					 					<i class="material-icons right">chrome_reader_mode</i>
									</button>
								</div>
								<div class="input-group col s6">
										<a class="btn waves-effect waves-light blue" type="btn" href="http://34.214.93.195/">Regresar
										 	<i class="material-icons right">home</i> 
										</a>
							</div>
						 </div>	

						 <!-- hasta aqui  -->					       
					</div>				
				</form>	
			</div>
			 <script src="wp-content/themes/twentyseventeen/jquery.min.js" ></script>
	 		<script src="wp-content/themes/twentyseventeen/materialize.min.js" ></script>
	</body>
</html>
