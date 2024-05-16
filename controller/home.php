<?php 
	session_start();
	require 'libreria/IFormulario.php';
	require 'libreria/FormularioRegistro.php';
	require 'libreria/FormularioLogin.php';
	require 'libreria/FormularioFactory.php';
	require 'libreria/FormularioHome.php';
	require 'libreria/FormularioReserva.php';
	require 'libreria/FormularioTrabajos.php';
	require 'libreria/FormularioEmpleados.php';

	$p = array();
	View('home',$p);
 ?>