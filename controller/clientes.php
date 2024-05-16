<?php 
	session_start();
	require 'libreria/IFormulario.php';
	require 'libreria/FormularioFactory.php';
	require 'libreria/FormularioClientes.php';

	$p = array();
	View('clientes',$p);
 ?>