<?php  /* Template Name: modeloformulario */ 

      $nombres=$_POST['txtnombre'];
      $apellidos=$_POST['apellido'];
      $cedulas=$_POST['cedula'];
      $correos=$_POST['correo'];
      $informacion="";


      if ($nombres == ""){
      	$error = "Deve introducir todo los datos";
      }      if ($apellidos == ""){
      	$error = "Deve introducir todo los datos";
      }      if ($cedulas == ""){
      	$error = "Deve introducir todo los datos";
      }      if ($correos == ""){
      	$error = "Deve introducir todo los datos";
      }
//echo $nombres . "  " . $apellidos . " " . $cedulas . "  " . $correos;

global $wpdb;

     $formulariouser = $wpdb->insert('wp_usuario_formulario', array('cedula' => $cedulas,'nombres' => $nombres, 'apellidos' => $apellidos, 'correo' => $correos),array('%s','%s','%s','%s'));
     
     if ($formulariouser ==true) :
     	$formulario = $wpdb->insert('wp_formulario',array('id_usuario_formulario' => $cedulas,'fecha_descargas' => 'CURDATE()'),array('%s','%s'));
		// Enviamos al usuario a la misma página con una variable GET de error.
		wp_redirect( 'http://34.214.93.195/wp-content/uploads/2017/10/descarga.pdf');
		exit;
     endif;


//$re= $wpdb->get_var(' SELECT cedula FROM wp_usuario_formulario  ');
?>


