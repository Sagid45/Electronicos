<?php 
	session_start();
	require 'libreria/IFormulario.php';
	require 'libreria/FormularioRegistroAutos.php';
	require 'libreria/FormularioFactory.php';

	$p = array();
	View('registroautos',$p);
 ?>