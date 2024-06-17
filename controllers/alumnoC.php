<?php

class AlumnoC
{
  public $alumnoM;

  public function __construct()
  {
    $this->alumnoM = new AlumnoM();
  }

  public function registrarAlumnoC()
  {
    if (isset($_POST['nombre'])) {

      $datosAlumno = array(
        "nombre" => $_POST['nombre'],
        "apellido" => $_POST['apellido'],
        "telefono" => $_POST['telefono'],
        "correo" => $_POST['correo'],
      );

      $res = $this->alumnoM->registrarAlumnoM($datosAlumno);

      if ($res) {
        echo "Registro exitoso";
      } else {
        echo "Error al registrar";
      }
    }
  }
}
