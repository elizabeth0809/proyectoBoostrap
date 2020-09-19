<footer class="footer-sitio pt-3 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eius iste, architecto at et fugiat ut eos iure quo maiores autem necessitatibus, nostrum deserunt corporis! Ullam quidem sequi minus amet!</p>
        </div>
        <div class="col-md-4">
          <h3 class="text-uppercase text-center pb-4">Horario</h3>
          <p>Lun - Viernes 7 AM - 8 PM</p>
          <p>Sabado - Domingo 8 AM - 6 PM</p>

        </div>
        <div class="col-md-4 text-center">
          <h3 class="text-uppercase text-center pb-4">Contacto</h3>
          <p>valenica - Av. monseñor Adams</p>
          <nav class="sociales text-center">
            <ul>
              <li><a href="facebook.com"> <span class="sr-only">Faceboo</span> </a></li>
              <li><a href="twitter.com"> <span class="sr-only">Twitter</span> </a></li>
              <li><a href="instagram.com"> <span class="sr-only">Intagra</span> </a></li>
              <li><a href="youtube.com"> <span class="sr-only">Youtube</span> </a></li>
              <li><a href="pinterest.com"> <span class="sr-only">Pintere</span> </a></li>
            </ul>
          </nav>
         </div>
         </div><!---Col-md-4-->
       <hr class="w-100">
       <p class="text-center copyright w-100">Restaurant Libanes 2020</p>
      </div><!--Row-->
    </div><!---Container-->
</footer>
    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
<?php
//Guarda todo el contenido a un archivo

$fp = fopen($archivoCache, 'w');
fwrite($fp, ob_get_contents());
fclose($fp);
//Enviar al navegador

ob_end_flush();
?>