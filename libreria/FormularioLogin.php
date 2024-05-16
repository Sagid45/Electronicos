<?php
    class FormularioLogin implements IFormulario
    {
        function Crear()
        {
            return '
            <div>
  <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Autolavado Gafes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto mb-2 mb-lg-0">
            <a class="nav-link active" aria-current="page" href="home">Home</a>
            <a class="nav-link active" href="reserva">Reserva</a>
            <a class="nav-link active" href="login">Login</a>
            <a class="nav-link active" href="registro">Registro</a>
          </div>
        </div>
    </div>
  </nav>
</div>          
<div class="bg-secondary pt-5 my-1" id="home" style="width: 100%; height: 56.25vw; max-width: 100vw; max-height: 99.78vh;">
            <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-4">
                <h1 class="text-center mb-4">Iniciar sesión</h1>
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Correo electrónico</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                </form>
              </div>
            </div>
          </div>';
        }
    }
?>