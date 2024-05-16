<?php 
	session_start();
	require 'libreria/IFormulario.php';
	require 'libreria/FormularioEmpleados.php';
	require 'libreria/FormularioFactory.php';

	$p = array();
	View('empleados',$p);
 ?>