<?php

ob_start();

require_once "utils/sesionU.php";

// iniciar sesión
SessionManager::startSession(); // SessionManager tiene opciuones para inciar , cerra , agregar datoas y quiatar datos

// controlador
require_once "controllers/rutasC.php";
require_once "controllers/alumnoC.php";


// modelo
require_once "models/rutasM.php";
require_once "models/alumnoM.php";


// plantilla
require_once "views/plantilla.php";
