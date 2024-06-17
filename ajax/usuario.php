<?php
require_once "../models/alumnoM.php";
require_once "../controllers/alumnoC.php";


if (isset($_POST['modulo_usuario'])) {
  $modulo = $_POST['modulo_usuario'];
  $alumnoC = new AlumnoC();

  if ($modulo == "registrar") {
    $alumnoC->registrarAlumnoC();
  }


  // aqui mas opciones como hacer login
  // pedir datos de usuario
  // verificar datos de usuario
  // validar datos de usuario
  // y mas cosas la "modulo_usuario" esta opcion va escondido en formulario
}
