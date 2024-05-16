<?php 
	session_start();
	require 'libreria/IFormulario.php';
	require 'libreria/FormularioLogin.php';
	require 'libreria/FormularioFactory.php';

	$p = array();
	View('login',$p);
?>
