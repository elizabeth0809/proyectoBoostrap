<?php
$titulo = 'Servicios';
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/nosotros.jpg" class="img-fluid">
        <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios</h2>
        </div>
      </div>
    </div>
<div class="container pt-4">
  <div class="row">
    <main class="col-lg-8 contenido-principal">
      <h2 class="d-block d-md-none text-uppercase text-center ">
        Servicios
      </h2>
<div id="servicios">
    <div class="card">
      <div class="card-header" id="servicio1">
        <h2 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1" aria-expanded="false" aria-controls="#descripcion1">Promociones Especiales</button>
        </h2>
      </div><!--Card Header-->
      <div id="descripcion1" class="collapse" aria-labelledby="servicio1" data-parent="#servicios">
        <div class="card-body">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam magni nostrum maxime alias dolore asperiores laborum nesciunt tenetur eius facilis pariatur ullam incidunt, dolor enim eveniet veniam? Harum, cumque sint.</p>
        </div>

      </div>
    </div>


    <div class="card">
      <div class="card-header" id="servicio1">
        <h2 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="#descripcion2">Servicio a Domicilio</button>
        </h2>
      </div><!--Card Header-->
      <div id="descripcion2" class="collapse" aria-labelledby="servicio2" data-parent="#servicios">
        <div class="card-body">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam magni nostrum maxime alias dolore asperiores laborum nesciunt tenetur eius facilis pariatur ullam incidunt, dolor enim eveniet veniam? Harum, cumque sint.</p>
        </div>

      </div>
    </div>

    <div class="card">
      <div class="card-header" id="servicio1">
        <h2 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3" aria-expanded="false" aria-controls="#descripcion3">Eventos Exclusivos</button>
        </h2>
      </div><!--Card Header-->
      <div id="descripcion3" class="collapse" aria-labelledby="servicio3" data-parent="#servicios">
        <div class="card-body">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam magni nostrum maxime alias dolore asperiores laborum nesciunt tenetur eius facilis pariatur ullam incidunt, dolor enim eveniet veniam? Harum, cumque sint.</p>
        </div>

      </div>
    </div>
  </div>
    </main>
    <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start ">
      <div class="sidebar text-center nuevos">
        <h2 class="text-center text-uppercase mt-4 ">Nuevos clientes</h2>
        <p>Recibe 20% de descuento con este cupon:</p>
        
          
         <div class="cupon">
          <h2 class=" text-uppercase mt-4 "> 20% Descuento <p> en todos los servicios</p> </h2>
          
          
          </div>
      </div>
    </aside>
  </div>
</div>
<?php
  include 'templates/citas.php';

  include 'templates/footer.php';
  
?>