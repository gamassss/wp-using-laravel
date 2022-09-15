<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">{{ ($title != 'Login' && $title != 'Register') ? 'Dashboard' : 'RS' }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title=='Home') ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title=='Pasien') ? 'active' : '' }}" href="/pasien">Pasien</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title=='Pasien Rawat Inap') ? 'active' : '' }}" href="/pasienri">Pasien Rawat Inap</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title=='Pasien Rawat Jalan') ? 'active' : '' }}" href="/pasienrj">Pasien Rawat jalan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>