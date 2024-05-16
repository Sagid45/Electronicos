<?php
    class FormularioTrabajos implements IFormulario
{
    private $trabajos;

    public function __construct()
    {
        // Aquí se cargarían los datos de la base de datos
        // $this->trabajos = Agregar base de datos aquí;
        // datos ficticios para mostrar el funcionamiento de la interfáz
        $this->trabajos = [
            [
                'imagen' => 'ruta_a_imagen_auto1.jpg', 
                'matricula' => 'ABC123', 
                'cliente' => 'Juan Perez', 
                'tipo_vehiculo' => 'Sedan'  
            ],
            [
                'imagen' => 'ruta_a_imagen_auto2.jpg', 
                'matricula' => 'XYZ789', 
                'cliente' => 'Ana Gomez', 
                'tipo_vehiculo' => 'SUV' 
            ]
        ];
    }

    public function Crear()
    {
        $output = '
        <div class="container mt-5">
            <h3 class="text-center mb-4">Trabajos Pendientes</h3>
            <div class="card-container">';

        foreach ($this->trabajos as $trabajo) {
            $output .= '
            <div class="card">
                <img src="' . $trabajo['imagen'] . '" alt="' . $trabajo['tipo_vehiculo'] . '">
                <div class="card-body">
                    <h5 class="card-title">' . $trabajo['cliente'] . '</h5>
                    <p class="card-text">Matrícula: ' . $trabajo['matricula'] . '</p>
                    <p class="card-text">Tipo de Vehículo: ' . $trabajo['tipo_vehiculo'] . '</p>
                    <button class="btn-accept">Aceptar Trabajo</button>
                </div>
            </div>';
        }

        $output .= '
            </div>
        </div>';

        return $output;
    }
}
?>