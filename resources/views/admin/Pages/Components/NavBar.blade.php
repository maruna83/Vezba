<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/admin"><img src="{{ ('../storage/assets/logodalila.jpg') }}" alt="" title="" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown"></div>
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/admin">Home</a>
        </li>
      </ul>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Stranice
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown1">
            <li><a class="dropdown-item" href="/admin/about">O nama</a></li>
            <li><a class="dropdown-item" href="/admin/contact">Kontakt</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Opste
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown2">
            <li><a class="dropdown-item" href="/admin/rooms">Prostorije</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item" href="/admin/category">Kategorije</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/admin/asortiman">Asortiman</a>
        </li>
      </ul>
    </div>
  </div>
</nav>