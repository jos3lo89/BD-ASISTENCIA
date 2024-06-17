<?php

class ConexionDB
{
  // cambiar los datos de conexion
  private $server = "localhost";
  private $user = "root";
  private $pass = "3322";
  private $db = "colegio";
  private $puerto = 3306;

  public function conexion()
  {
    $conexion = new mysqli($this->server, $this->user, $this->pass, $this->db, $this->puerto);
    if (!$conexion) {
      die("No se pudo conectar al servidor: " . mysqli_connect_error());
    }
    return $conexion;
  }
}
