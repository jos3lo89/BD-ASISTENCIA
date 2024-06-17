<?php

// probando las sesiones
// estas sesiones se peuden usar en todos los archivos
SessionManager::setSessionData("nombre", "Juan");
$nombrePrueba = SessionManager::getSessionData("nombre");

?>





<div>
  <h2>Inicio</h2>

  <p>Hola es el nombre de usuario de prueba sacada de la sesion: <h1><?php echo $nombrePrueba; ?></h1> </p>
</div>