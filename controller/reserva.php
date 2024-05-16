<?php 
	session_start();
	require 'libreria/IFormulario.php';
	require 'libreria/FormularioReserva.php';
	require 'libreria/FormularioFactory.php';

	$p = array();
	View('reserva',$p);
 ?>