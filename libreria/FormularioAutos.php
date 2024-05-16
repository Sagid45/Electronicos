<?php
    class FormularioAutos implements IFormulario
    {
        function Crear()
        {
            $autos = [
                    [
                        'nombre' => 'Toyota Corolla',
                        'forma_cobro' => 'Por día',
                        'valor' => '$50',
                    ],
                    [
                        'nombre' => 'Honda Civic',
                        'forma_cobro' => 'Por hora',
                        'valor' => '$10',
                    ]
                ];

                $tablaHTML = '<table class="table">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Forma de Cobro</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>';

                foreach ($autos as $auto) {
                    $tablaHTML .= '<tr>
                                        <td>' . $auto['nombre'] . '</td>
                                        <td>' . $auto['forma_cobro'] . '</td>
                                        <td>' . $auto['valor'] . '</td>
                                    </tr>';
                }

                $tablaHTML .= '</tbody>
                            </table>';

                $htmlCompleto = '
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                            <div class="col text-end">
                        <a href="registroautos" class="btn btn-primary">Registrar</a>
                    </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title text-center mb-4">Listado de Autos</h5>
                                        ' . $tablaHTML . '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';

                return $htmlCompleto;
        }
    }
