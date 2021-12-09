<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="/home/home">Pelu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home/home">Home Invitado</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo isset($_SESSION['employee']) ? "/home" : "" ?>">
          <?php echo isset($_SESSION['employee']) ? "Home" : "" ?></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/empleados/index">Ver Empleados Invitado</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo isset($_SESSION['employee']) ? "/empleados" : "" ?>">
          <?php echo isset($_SESSION['employee']) ? "Ver Empleados" : "" ?></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/servicios/index">Ver Servicios Invitado</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo isset($_SESSION['employee']) ? "/servicios" : "" ?>">
          <?php echo isset($_SESSION['employee']) ? "Ver Servicios" : "" ?></a>
      </li>
    </ul>

    <!-- nuevo -->
    <ul class="navbar-nav">
      <li class="nav-item active"><a class="nav-link" href=""><?php echo isset($_SESSION['employee']) ? $_SESSION['employee']->name : '' ?></a></li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo isset($_SESSION['employee']) ?  "/login/logout" : "/login" ?>">
          <?php echo isset($_SESSION['employee']) ? "Logout" : "Login" ?></a>
      </li>
    </ul>
  </div>
</nav>