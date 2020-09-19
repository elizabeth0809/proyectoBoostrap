<?php
$titulo = 'Inicio';
  include 'templates/header.php';
  include 'templates/navegacion.php';
  include 'inc/conexion.php';
  include 'inc/funciones.php';
  
?>
    
    <div class="container">
    <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 imagenSlider" src="img/vagon06.jpg" alt="First slide">
          <div class="carousel-caption">
          <h3 class="text-uppercase">Comida del medio Oriente</h3>
        </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 imagenSlider" src="img/vagon08.jpg" alt="Second slide">
          <div class="carousel-caption">
          <h3 class="text-uppercase">Promociones Especiales</h3>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 imagenSlider" src="img/vagonl03.jpg" alt="Third slide">
          <div class="carousel-caption">
          <h3 class="text-uppercase">Conoce Nuestro Menu</h3>
        </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </div><!---Carrousel-->
<section class="nuevo-sitio py-5">
  <h2 class="text-center mt-4">
    <span class=" d-block">
      Bienvenido a Nuestro
    </span> Sitio Web
  </h2>
  <p class="text-center mt-4">Ven a disfrutar las delicias del medio Oriente <br>25 años preparando la mejor comida árabe libanesa de Valencia.</p>
</section>

<div class="container mb-5">
  <div class="row">
    <div class="col-md-4 text center">
      <div class="imagen-servicio">
        <img src="img/vagonl16.jpg" class="img-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-10 pt-4 servicio-info">
            <h3 class="text-center text-lowercase encabezado">
              <span class="text-uppercase d-block">
                Conoce sobre
              </span>
              nosotros
            </h3>
            <a href="#" class="btn btn-primary btn-block mt-4 py-3">Leer mas</a>
          </div>
        </div>
      </div><!---Imagen destacada-->
    </div><!---col 4-->

    <div class="col-md-4 text center">
      <div class="imagen-servicio">
        <img src="img/vagonl39.jpg" class="img-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-10 pt-4 servicio-info">
            <h3 class="text-center text-lowercase encabezado">
              <span class="text-uppercase d-block">
                Visita
              </span>
              nuestra tienda
            </h3>
            <a href="#" class="btn btn-primary btn-block mt-4 py-3">Leer mas</a>
          </div>
        </div>
      </div><!---Imagen destacada-->
    </div><!---col 4-->

    <div class="col-md-4 text center">
      <div class="imagen-servicio">
        <img src="img/vagonl28.jpg" class="img-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-10 pt-4 servicio-info">
            <h3 class="text-center text-lowercase encabezado">
              <span class="text-uppercase d-block">
                Conoce
              </span>
              nuestro menu
            </h3>
            <a href="#" class="btn btn-primary btn-block mt-4 py-3">Leer mas</a>
          </div>
        </div>
      </div><!---Imagen destacada-->
    </div><!---col 4-->
  </div>
</div>

<div class="horario">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-center  mt-4">Horarios</h2>
        <p class="text-center mt-5 lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis eaque nesciunt quos! Nobis, voluptatum ad. Minus laudantium, inventore dolor exercitationem eius tenetur laboriosam, amet officiis hic esse, repudiandae blanditiis pariatur.</p>
        <table class="table table-hover text-center mt-5">
          <thead>
            <tr>
              <th class="text-center">Dia</th>
              <th class="text-center">De</th>
              <th class="text-center">Hasta</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Lunes</td>
              <td>09:00</td>
              <td>19:00</td>

            </tr>
            <tr>
              <td>Martes</td>
              <td>09:00</td>
              <td>19:00</td>

            </tr>
            <tr>
              <td>Miercoles</td>
              <td>09:00</td>
              <td>19:00</td>

            </tr>
            <tr>
              <td>Jueves</td>
              <td>09:00</td>
              <td>19:00</td>

            </tr>
            <tr>
              <td>Viernes</td>
              <td>11:00</td>
              <td>19:00</td>

            </tr>
            <tr>
              <td>Sabado</td>
              <td>Cerrado</td>
              <td>Cerrado</td>

            </tr>
            <tr>
              <td>Domingo</td>
              <td>Cerrado</td>
              <td>Cerrado</td>

            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6 bg-horario">
  
      </div>
    </div>
  </div>
</div>
<section class="productos container py-5">
  <h2 class="text-uppercase text-center mt-4">
    <span class="d-block text-lowercase">Nuestros</span> productos
  </h2>
  <div class="row py-5">
<?php
  $productos = obtenerProductos(4);

 while($producto = $productos->fetch_assoc()) {
?>

    <div class="col-md-3">
      <div class="card">
        <a href="producto.php?id=<?php echo $producto['id']; ?>">
          <img src="img/vagonl03.jpg" alt="" class="card-img-top">
          <div class="card-body">
            <h3 class="card-title text-center">
            <?php echo $producto['nombre']; ?>
            </h3>
            <p class="card-text">
            <?php echo $producto['descripcion_corta']; ?>

            </p>
            <p class="precio lead text-center">
           $ <?php echo $producto['precio']; ?>

            </p>
          </div>
        </a>
      </div><!--Card-->
    </div><!--col-3-->

<?php  } ?>
   </div>
</section>

<?php
  include 'templates/citas.php';

  include 'templates/footer.php';
  
?>