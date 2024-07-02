<?php

require_once "conexionDB.php";

class AlumnoM extends ConexionDB
{

  public function registrarAlumnoM($datosAlumno)
  {
    $conexion = $this->conexion();

    // aqui tambien se peude evitar el ataque de SQL Injection

    // $ejemplo = $conexion->real_escape_string($datosAlumno['nombre']); // asi para todos los datos

    // este tipo de consulta evita algunos ataques de SQL Injection
    $sql = "INSERT INTO ESTUDIANTE (nombre, apellido, telefono, correo) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssss", $datosAlumno['nombre'], $datosAlumno['apellido'], $datosAlumno['telefono'], $datosAlumno['correo']);

    if ($stmt->execute()) {
      if ($conexion->affected_rows == 1) {
        $stmt->close();
        return true;
      }
    }

    $stmt->close();
    return false;
  }


  public function login()
  {

    $conn = $this->conexion();
    $sql = "select  * from estudiante;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $fila = $result->fetch_array(MYSQLI_ASSOC);
      $nombre = SessionManager::getSessionData("datito");
      while ($fila = $result->fetch_array(MYSQLI_ASSOC)) {
        if ($fila["nombre"] == $nombre) {
          $conn->close();
          return true;
        }
      }
    }
    $conn->close();
    return false;
  }
}
