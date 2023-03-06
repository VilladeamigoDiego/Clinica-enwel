<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once ('head.php') ?>
  <title>CLINICA PRIVADA ÑENWELITO - INICIO</title>

</head>

<body>
    <!-- menu -->

    <?php include_once ('menu.php') ?>

    <!--NO BORRAR / ESTO HACE QUE LAS IMAGENES PASEN A LA DERECHA-->

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3500">
                <img src="img/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3500">
                <img src="img/slide2.jpg" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item" data-bs-interval="3500">
                <img src="img/slide3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
  <div class="row">
  <main>
    <div class="px-4 pt-3 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold sombra">HOSPITAL DE CLINICA "ÑENWELITO"</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4 fs-3">Donde la plata es lo más importante, tu salud nos chupa un huev*.</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3"><a class="mas" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ ">CONOCER MAS</a></button>
            <button type="button" class="btn btn-secondary btn-lg px-4"><a class="mas" href="turnos.php">SACAR TURNO</a></button>
          </div>
        </div>
        <div class="overflow-hidden" style="max-height: 50vh;">
          <div class="container px-5">
            <img src="img/logo.png" class="img-fluid rounded-circle shadow-lg mb-4" alt="Example image" width="250" height="250" loading="lazy">
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 mb-3 m-2 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-0">
            <div class="card-header py-3 shadow-lg p-3 mb-5 rounded mb-5 bronce rounded">
              <h4 class="my-0 fw-normal">BRONCE</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$2500<small class="text-muted fw-light">/mes</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Internación al 50%</li>
                <li>Sin coseguro incluido</li>
                <li>25% descuento en Farmacia</li>
                <li>Asistencia las 24hs</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg bronce text-dark shadow p-1 mb-2 boton">CONTRATAR</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-0">
            <div class="card-header py-3 shadow-lg p-3 mb-5 rounded mb-5 plata rounded">
              <h4 class="my-0 fw-normal">PLATA</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$3500<small class="text-muted fw-light">/mes</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Internación al 100%</li>
                <li>Sin coseguro incluido</li>
                <li>50% descuento en Farmacia</li>
                <li>Asistencia las 24hs</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg plata shadow p-1 mb-2 text-dark boton">CONTRATAR</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-0">
            <div class="card-header py-3 text-white shadow-lg p-3 mb-5 rounded mb-5 mb-5 oro rounded">
              <h4 class="my-0 fw-normal">ORO</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$5000<small class="text-muted fw-light">/mes</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Internación al 100%</li>
                <li>Coseguro Incluido</li>
                <li>80% descuento en Farmacia</li>
                <li>Asistencia las 24hs</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg shadow p-1 mb-2 boton oro">CONTRATAR</button>
            </div>
          </div>
        </div>
      </div>
</main>
</div>



    <!--NO BORRAR / ESTO HACE QUE FUNCIONE LA ANIMACION DE LAS IMAGENES-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <?php
      include_once('footer.php');
    ?>
</body>

</html>