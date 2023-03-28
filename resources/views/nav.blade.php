   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
    <div class="container">
      <a class="navbar-brand" href="{{route('acceuil')}}"
        >Acceuille</a>
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" class="float-right">
        <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item">
            <a class="nav-link mx-2" href="{{ route('propos') }}"><i class="fas fa-bell pe-2"></i>A PROPOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{ route('passager') }}"><i class="fas fa-bell pe-2"></i>PASSAGER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{ route('chauffeur') }}"><i class="fas fa-bell pe-2"></i>CHAUFFEUR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{ route('login') }}"><i class="fas fa-bell pe-2"></i>SE CONNECTER</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->