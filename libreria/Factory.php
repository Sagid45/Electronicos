<?php
    require_once 'EliminarProducto.php';
    require_once 'AgregarProducto.php';
    require_once 'ModificarProducto.php';

    class Factory
    {
        public static function elegirOperacion($tipo)
        {
            switch ($tipo) {
                case 'add':
                    return new AgregarProducto();
                case 'delete':
                    return new EliminarProducto();
                case 'modificar':
                    return new ModificarProducto();
                default:
                    throw new Exception("Operación no válida: $tipo");
            }
        }
    }
?>
