<?php
    class FormularioFactory
    {
       static function Mostrar($tipo)
       {
            switch($tipo)
            {
                case 'Login': return new FormularioLogin(); 
                    break;
                case 'Registro': return new FormularioRegistro(); 
                    break;
            }
       }
    }