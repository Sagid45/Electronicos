<?php
    class FormularioLogin implements IFormulario
    {
        function Crear()
        {
            return '
              <div class="container mt-5">
                <div class="row justify-content-center">
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title text-center mb-4">Inicio de Sesión</h5>
                        <form>
                          <div class="mb-3">
                            <label for="inputEmail" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Ingrese su correo electrónico">
                          </div>
                          <div class="mb-3">
                            <label for="inputPassword" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Ingrese su contraseña">
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
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