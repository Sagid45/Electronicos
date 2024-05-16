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
                case 'Home': return new FormularioHome();
                    break;
                case 'Reserva': return new FormularioReserva();
                    break;
                case 'Trabajos': return new FormularioTrabajos();
                    break;
                
            }
       }
    }