<?php
session_start();
require 'libreria/IFormulario.php';
	require 'libreria/FormularioLogin.php';


$p = array();
View('Login',$p);
?>
