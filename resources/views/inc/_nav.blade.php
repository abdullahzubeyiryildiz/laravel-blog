 <!-- Default Boostrap Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ is_active('/') }}">
          <a class="nav-link" href="/">Anasayfa <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ is_active('about') }} ">
          <a class="nav-link" href="/about">Hakkımızda</a>
        </li>
        <li class="nav-item {{ Request::is('contact') ? "active" : "" }}">
          <a class="nav-link" href="/contact">İletişim</a>
        </li>
      </ul>

    </div>
  </nav>