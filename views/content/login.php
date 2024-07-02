<?php
$alumnoC = new AlumnoC();
$alumnoC->loginAlumnoC();
$nombrePrueba2 = SessionManager::getSessionData("datito");
?>
<p><?= $nombrePrueba2 ?> </p>
<p> <?= $nombrePrueba2 == "pepito" ? "primera vista" : "segunda vista" ?> </p>
<?php
if ($nombrePrueba2 == "pepito") {
?>
  <img src="https://i.pinimg.com/564x/b0/42/a9/b042a9090aa495ed5e53f4c0e42c94e8.jpg" alt="">
<?php
} else {
?>
  <img src="https://i.pinimg.com/564x/af/d7/36/afd736cf121dd5b3d993ada011872da8.jpg" alt="">
<?php
}
?>
<form action="" method="post">
  <input type="text" name="nombre">
  <input type="submit" value="guardaruser" placeholder="guardar">
</form>