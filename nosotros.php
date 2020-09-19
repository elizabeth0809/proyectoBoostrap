<?php
$titulo = 'Nosotros';
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/noso.jpg" class="img-fluid">
        <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
        </div>
      </div>
    </div>
<div class="container pt-4">
  <div class="row">
    <main class="col-lg-8 contenido-principal">
      <h2 class="d-block d-md-none text-uppercase text-center ">
        Nosotros
      </h2>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum sequi, minima eum explicabo odio deserunt at placeat sed nisi deleniti aliquid quo temporibus nemo est illo iste nihil facere! Consectetur.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum sequi, minima eum explicabo odio deserunt at placeat sed nisi deleniti aliquid quo temporibus nemo est illo iste nihil facere! Consectetur.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum sequi, minima eum explicabo odio deserunt at placeat sed nisi deleniti aliquid quo temporibus nemo est illo iste nihil facere! Consectetur.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum sequi, minima eum explicabo odio deserunt at placeat sed nisi deleniti aliquid quo temporibus nemo est illo iste nihil facere! Consectetur.

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident unde id ad quia tempora possimus nam, recusandae nesciunt voluptates dicta tempore! Dolor ullam hic, ipsum praesentium pariatur doloremque facilis libero.</p>
        
        <h2 class="text-center mt-4">
          <span class=" d-block">
            Conoce nuestro
          </span> Menu
          <div class="imagenes pt-4">
            <a href="#" data-target="#imagen1" data-toggle="modal">
              <img src="img/mni.jpg" alt="">
            </a>
            <a href="#" data-target="#imagen2" data-toggle="modal">
              <img src="img/mini2.jpg" alt="">
            </a>
            <a href="#" data-target="#imagen3" data-toggle="modal">
              <img src="img/mini3.jpg" alt="">
            </a>
            <div class="modal fade" id="imagen1" tabindex="-1" role="dialog" aria-labelledby="imagen 1" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <img src="img/vagon01 (2).jpg" class="img-fluid">
                    </div>
                  </div>
              </div>
            </div><!---Modal-->

            <div class="modal fade" id="imagen2" tabindex="-1" role="dialog" aria-labelledby="imagen 2" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <img src="img/vagon0101.png" class="img-fluid">
                    </div>
                  </div>
              </div>
            </div><!---Modal-->

            <div class="modal fade" id="imagen3" tabindex="-1" role="dialog" aria-labelledby="imagen 3" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <img src="img/vagon08.jpg" class="img-fluid">
                    </div>
                  </div>
              </div>
            </div><!---Modal-->
          </div>
        </h2>
      </main>
    <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
      <div class="sidebar horario">
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
    </aside>
  </div>
</div>
<?php
  include 'templates/footer.php';
  
?>