<?php
    $login = FormularioFactory::Mostrar('Login');
    $registro = FormularioFactory::Mostrar('Registro');
?>
<div>Bienvenido</div>
<?php echo $login->Crear(); ?>

<?php echo $registro->Crear(); ?>

