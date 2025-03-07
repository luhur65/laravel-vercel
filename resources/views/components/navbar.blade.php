<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="{{ route('welcome') }}">Web Simpan Data</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ Request::routeIs('home') ? "active" : "" }}" aria-current="page" href="{{ route('home') }}">Home</a>
        <a class="nav-link {{ Request::routeIs('about') ? "active" : "" }}" href="{{ route('about') }}">About</a>
        <a class="nav-link {{ Request::routeIs('contact') ? "active" : "" }}" href="{{ route('contact') }}">Kontak</a>
        <a class="nav-link {{ Request::routeIs('mahasiswa') ? "active" : "" }}" href="{{ route('mahasiswa') }}">Mahasiswa</a>
      </div>
    </div>
  </div>
</nav>