<header class="header-main">
  <div class="header-main__logo">
    <h1>Sistema de Asistencia</h1>
  </div>

  <nav class="header-main__nav">
    <ul>
      <li><a href="index.php?ruta=inicio">Inicio</a></li>
      <li><a href="index.php?ruta=registrar">Registrar</a></li>
    </ul>
  </nav>

</header>

<!-- no es recoemndable usar asi ponlo en un archivo separado los estilos  -->
 <!-- solo es para pruba  -->
<style>
  .header-main {
    background-color: #303030;
    padding: 1rem;
    display: flex;
    justify-content: space-around;
    align-items: center;
  }

  .header-main__logo {
    font-size: 1rem;
  }

  .header-main__nav {
    display: flex;
    justify-content: space-between;
  }

  .header-main__nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .header-main__nav ul li {
    display: inline-block;
    margin-right: 1rem;
  }

  .header-main__nav ul li a {
    color: #fff;
    text-decoration: none;
  }
</style>