<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
      <a class="navbar-brand" href="/">UNMUL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Beranda') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Buku') ? 'active' : '' }}" aria-current="page" href="#">Daftar Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Peminjaman') ? 'active' : '' }}" href="/pinjam">Peminjaman Buku</a>
          </li>
        </ul>
      </div>
    </div>
</nav>