<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Asistencia</title>
  <link rel="stylesheet" href="views/css/style.css">
</head>

<body>


  <?php
  include "views/content/menu.php";
  ?>


  <section>
    <?php

    $rutasC = new RutasC();
    $modulo = $rutasC->procesarRutasC();

    include $modulo;
    ?>
  </section>



  <!-- js -->
  <script src="views/js/jquery-4.0.0-beta.min.js"></script>
  <script src="views/js/registrar.js"></script>

</body>

</html>