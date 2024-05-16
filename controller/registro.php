<?php 
	session_start();
	require 'libreria/IFormulario.php';
	require 'libreria/FormularioRegistro.php';
	require 'libreria/FormularioFactory.php';

	$p = array();
	View('registro',$p);
 ?>