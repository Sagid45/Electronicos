<?php
    class FormularioReserva implements IFormulario
    {
        function Crear()
        {
            return '
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center mb-4">Reservar Cita</h5>
                                <form id="reservaForm">
                                    <!-- Nombre del Cliente -->
                                    <div class="mb-3">
                                        <label for="nombreUsuario" class="form-label">Nombre del Cliente</label>
                                        <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Ingrese su nombre">
                                    </div>
                                    <!-- Matrícula del Auto -->
                                    <div class="mb-3">
                                        <label for="matriculaAuto" class="form-label">Matrícula del Auto</label>
                                        <input type="text" class="form-control" id="matriculaAuto" name="matriculaAuto" placeholder="Ingrese la matrícula del auto">
                                    </div>

                                    <!-- Tarjeta Carro -->
                                    <div id="tarjetaCarro" class="tarjeta" style="display:none;">
                                        <img src="images/carro.png" class="d-block w-100" alt="Carro">
                                        <div class="card-body">
                                            <h5>Carro</h5>
                                            <p>Sin añadidos</p>
                                        </div>
                                    </div>

                                    <!-- Tarjeta Camioneta -->
                                    <div id="tarjetaCamioneta" class="tarjeta" style="display:none;">
                                        <img src="images/camioneta.png" class="d-block w-100" alt="Camioneta">
                                        <div class="card-body">
                                            <h5>Camioneta</h5>
                                            <p>
                                                <label for="numeroPuertas" class="form-label">Número de Puertas</label>
                                                <select class="form-control" id="numeroPuertas" name="numeroPuertas">
                                                    <option value="2">2 puertas</option>
                                                    <option value="4">4 puertas</option>
                                                    <option value="5+">5 o más puertas</option>
                                                </select>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Tarjeta Tracto Camión -->
                                    <div id="tarjetaTractoCamion" class="tarjeta" style="display:none;">
                                        <img src="images/camion.jpg" class="d-block w-100" alt="Tracto Camión">
                                        <div class="card-body">
                                            <h5>Tracto Camión</h5>
                                            <p>
                                                <label for="tamanioTracto" class="form-label">Tamaño del Tracto Camión</label>
                                                <select class="form-control" id="tamanioTracto" name="tamanioTracto">
                                                    <option selected disabled>Seleccione el tamaño del tracto camión</option>
                                                    <option value="pequeno">Pequeño</option>
                                                    <option value="mediano">Mediano</option>
                                                    <option value="grande">Grande</option>
                                                </select>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Botones de Control -->
                                    <div class="text-center mt-3">
                                        <button class="btn btn-primary" id="btnCarro">Carro</button>
                                        <button class="btn btn-primary" id="btnCamioneta">Camioneta</button>
                                        <button class="btn btn-primary" id="btnTractoCamion">Tracto Camión</button>
                                    </div>

                                    <!-- Botón de Reservar -->
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-primary">Reservar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    // Funciones para mostrar las tarjetas correspondientes cuando se presiona un botón
                    document.getElementById("btnCarro").addEventListener("click", function() {
                        mostrarTarjeta("tarjetaCarro");
                    });

                    document.getElementById("btnCamioneta").addEventListener("click", function() {
                        mostrarTarjeta("tarjetaCamioneta");
                    });

                    document.getElementById("btnTractoCamion").addEventListener("click", function() {
                        mostrarTarjeta("tarjetaTractoCamion");
                    });

                    // Función para ocultar todas las tarjetas y mostrar solo la tarjeta deseada
                    function mostrarTarjeta(idTarjeta) {
                        var tarjetas = document.getElementsByClassName("tarjeta");
                        for (var i = 0; i < tarjetas.length; i++) {
                            tarjetas[i].style.display = "none";
                        }
                        document.getElementById(idTarjeta).style.display = "block";
                    }

                    // Manejar el envío del formulario aquí
                    document.getElementById("reservaForm").addEventListener("submit", function(event) {
                        event.preventDefault(); // Evitar el envío del formulario por ahora, puedes agregar el manejo del envío aquí
                        alert("Formulario enviado"); // Por ahora solo mostramos una alerta, puedes manejar el envío del formulario como desees
                    });
                });
            </script>
            ';
        }
    }