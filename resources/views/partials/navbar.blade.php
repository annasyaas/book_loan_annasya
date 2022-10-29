<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
      <a class="navbar-brand" href="/">UNMUL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'beranda') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'buku') ? 'active' : '' }}" aria-current="page" href="/buku">Daftar Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'kategori') ? 'active' : '' }}" href="/categories">Kategori</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome Back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    Logout <span data-feather="log-out" class="align-text-bottom"></span>
                  </button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'login') ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i>  Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
</nav>