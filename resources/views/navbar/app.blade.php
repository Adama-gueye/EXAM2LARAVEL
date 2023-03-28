   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
    <div class="container">
      <a class="navbar-brand" href="{{route('admin.index')}}"
        >Home</a>
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
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{ route('chauffeur.liste')}}"><i class="fas fa-bell pe-2"></i>Liste des Chauffeurs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{ route('client.liste')}}"><i class="fas fa-bell pe-2"></i>Liste des Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{ route('logout') }}"><i class="fas fa-bell pe-2"></i></a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
              SE DECONNECTER
              </button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Navbar -->