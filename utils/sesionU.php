<?php

class SessionManager
{

  // iniciar sesion
  public static function startSession()
  {
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }
  }

  //agregar datos a la sesion
  public static function setSessionData($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  //obtener datos de la sesion
  public static function getSessionData($key)
  {
    return $_SESSION[$key] ?? null;
  }

  // cerrar sesion
  public static function destroySession()
  {
    session_destroy();
  }
}
