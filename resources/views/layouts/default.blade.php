<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Good Job</title>
  </head>
  <body>
      @include('layouts.cabeza');

      @yield('content')

    <footer>
      <h3 id="nredes">Nuestras Redes</h2>
        <div class="redes">
      <a href="#" target="_blank"><img src="css/imagenes/twitter.png" alt=""></a>
      <a href="#" target="_blank"><img src="css/imagenes/instagram.png" alt=""></a>
      <a href="#" target="_blank"><img src="css/imagenes//facebook.png" alt=""></a>
    </div>
      <ul class="pie">
        <li><a href="#">Sobre Nosotros</a></li>
        <li><a href="faq.php">Preguntas Frecuentes</a></li>
        <li><a href="#">Empleos</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </footer>

  </body>
</html>
