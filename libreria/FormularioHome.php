<?php
    class FormularioHome implements IFormulario
    {
        function Crear()
        {
            return '           
<div>
<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">AutoLavadoGafes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto mb-2 mb-lg-0">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
          <a class="nav-link active" href="reserva">Reserva</a>
          <a class="nav-link active" href="login">Login</a>
        </div>
      </div>
      <div class="pe-1 ml-auto collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
          <a class="nav-link active" href="nosotros">Features</a>
        </div>
      </div>
  </div>
</nav>
</div>
          
          <div class="bg-secondary pt-5 my-1" id="home" style="width: 100%; height: 56.25vw; max-width: 100vw; max-height: 99.78vh;">
              hola
          </div>

          <div>
              <div class="row">
                  <div class="col-6">
                  </div>
                  <div class="col-6">
                  </div>
              </div>
          </div>

            ';
        }
    }
?>
