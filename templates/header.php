<?php 
  //Definir un nombre para cachear
  $archivo = basename($_SERVER['PHP_SELF']);
  $pagina = str_replace(".php", "", $archivo);

  //Definir archivo para cachear (puede ser .php tambien)
  if(isset($_GET['id'])){
    $archivoCache = 'cache/'.$pagina. '-'. $_GET['id'] .'.html';

  }else{
  $archivoCache = 'cache/'.$pagina.'.html';
  }
  //Cuanto tiempo debera estar estar este archivo almacenado
  $tiempo = 36000;
  //Checar que el archivo exista, el tiempo sea el adecuado y muestralo
  if(file_exists($archivoCache)&& time() - $tiempo < filemtime($archivoCache)){
    include($archivoCache);
    exit;
  }
  // Si el archivo no existe, o el tiempo de cacheo ya se vencio genera uno nuevo
  ob_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $titulo ?> | Restaurant Libanes</title>
  </head>
  <body>
    <!-- Add Your HTML here -->
    <header class="encabezado-sitio container">
      <div class="row justify-content-md-between">
        <div class="col-lg-4">
          <a href="index.php">
          <img src="img/vagon.jpg" class="img-fluid mx-auto d-block">
          </a>
        </div>
        <div class="col-lg-4">
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
      </div>
    </header>