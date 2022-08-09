<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container">
    <a class="navbar-brand" href="/">MUTASI dan PROMOSI ASN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{($title === 'BRANDA')? 'active' : ' '}}" href="/">Home</a>
        </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{($title === 'MUTASI')? 'active' : ' '}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mutasi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/mutasi">Informasi</a></li>
            @if (Route::has('login'))
            @auth
            <li><a class="dropdown-item" href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                    @else
                    <li><a class="dropdown-item" href="{{ route('login') }}">Pemberkasan</a></li>    
                     @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" hidden class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
            @endif
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Call Center</a></li>
          </ul>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{($title === 'IDENTITAS')? 'active' : ' '}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Identitas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/pegawai">Informasi</a></li>
            @if (Route::has('login'))
            @auth
            <li><a class="dropdown-item" href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                    @else
                    <li><a class="dropdown-item" href="{{ route('login') }}">Pemberkasan</a></li>    
                     @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" hidden class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
            @endif
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Call Center</a></li>
          </ul>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{($title === 'PROMOSI')? 'active' : ' '}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kepangkatan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/pangkat">Informasi</a></li>
            @if (Route::has('login'))
            @auth
            <li><a class="dropdown-item" href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                    @else
                    <li><a class="dropdown-item" href="{{ route('login') }}">Pemberkasan</a></li>    
                     @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" hidden class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
            @endif
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Call Center</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>