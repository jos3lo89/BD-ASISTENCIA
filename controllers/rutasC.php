<?php

class RutasC
{
  public $rutasM;

  public function __construct()
  {
    $this->rutasM = new RutasM();
  }

  public function procesarRutasC()
  {
    if (isset($_GET['ruta'])) {
      $ruta = $_GET['ruta'];
    } else {
      $ruta = "index";
    }
    $direccionUrl = $this->rutasM->procesarRutasM($ruta);
    return $direccionUrl;
  }



  // aqui mas metodos para preteger las rutas 
}
