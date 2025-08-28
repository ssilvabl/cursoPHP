<!--Obtener el nombre completo del recurso (URI)-->
<?php $current_page = basename($_SERVER['REQUEST_URI']); ?>

<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">

    <a class="navbar-brand" href="home">Silva</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <a class="nav-link <?= $current_page == 'home'     ? 'active' : '' ?>" href="home">Inicio</a>
        <a class="nav-link <?= $current_page == 'posts'    ? 'active' : '' ?>" href="posts">Publicaciones</a>
        <a class="nav-link <?= $current_page == 'projects' ? 'active' : '' ?>" href="projects">Proyectos</a>
        <a class="nav-link <?= $current_page == 'about'    ? 'active' : '' ?>" href="about">Sobre mi</a>
      </div>
    </div>

  </div>
</nav>

