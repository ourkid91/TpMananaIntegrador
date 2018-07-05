<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <div class="contenedor-bienvenida">
      <?php
    session_start();

    echo '<p class="mensaje-bienvenida">Bienvenido '.$_SESSION['usuario'] . '</p>';

     session_destroy();
       ?>

       <h3 class="registrado">Su usuario fue registrado</h3>

       <p class="mensaje-bienvenida">Ahora podés loguearte <a href="login.php">aquí</a></p>

       </div>
  </body>
</html>
