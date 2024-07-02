<?php

class RutasM
{

  public function procesarRutasM($rutas)
  {
    if (
      $rutas == "inicio" ||
      $rutas == "registrar" ||
      $rutas == "login" 
      // aqui agregar mas rutas y opciones
    ) {
      $direccion = "views/content/" . $rutas . ".php";
    } elseif ($rutas == "index") {
      $direccion = "views/content/inicio.php";
    } else {
      $direccion = "views/content/inicio.php";
    }

    return $direccion;
  }
}
