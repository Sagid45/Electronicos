<!DOCTYPE html>
<html>
<head>
  <title>Autolavado GAFES</title>
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/propio.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript"></script>

            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Reportes
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="empleadodia">Empleado del Día</a></li>
                                    <li><a class="dropdown-item" href="pagos">Reporte de Pago</a></li>
                                </ul>
                            </li>
                        </ul>
                          <a href="admin" style="background-color: #ff6600; padding: 12px 24px; border-radius: 20px; text-decoration: none; color: white;" me-2" class="pe-5 mx-1" >Usuarios</a>
                          <a href="autos" style="background-color: #ff6600; padding: 12px 24px; border-radius: 20px; text-decoration: none; color: white;" me-2" class="pe-5 mx-1">Autos</a>
                          <a href="#" class="pe-5 mx-1" style="background-color: #ff6600; padding: 12px 24px; border-radius: 20px; text-decoration: none; color: white;">Pagar</a>
                        <button class="btn btn-danger"  >Cerrar Sesión</button>
                    </div>
                </div>
            </nav>
</head>
<body>
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
  <div><?php echo $view_content; ?></div>
</body>
</html>