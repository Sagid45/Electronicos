<?php
    class FormularioRegistro implements IFormulario
    {
        function Crear()
        {
            return '
              <div class="container mt-5">
                <div class="row justify-content-center">
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title text-center mb-4">Registro de Usuario</h5>
                        <form action="process_registration.php" method="POST">
                          <div class="mb-3">
                            <label for="username" class="form-label">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                          </div>
                          <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                          </div>
                          <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                          </div>
                          <div class="mb-3">
                            <label for="userType" class="form-label">Tipo de Usuario</label>
                            <select class="form-select" id="userType" name="userType" required>
                              <option value="empleado">Empleado</option>
                              <option value="administrador">Administrador</option>
                            </select>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            ';
        }
    }