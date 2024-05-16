<?php 
	session_start();
	require 'libreria/IFormulario.php';
	require 'libreria/FormularioTrabajos.php';
	require 'libreria/FormularioFactory.php';

	$p = array();
	View('trabajos',$p);
 ?>