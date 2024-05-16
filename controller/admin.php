<?php 
	session_start();
	require 'libreria/IFormulario.php';
	require 'libreria/FormularioFactory.php';
	require 'libreria/FormularioAdmin.php';

	$p = array();
	View('admin',$p);
 ?>