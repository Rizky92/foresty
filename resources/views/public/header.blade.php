<nav class="navbar fixed-top navbar-expand navbar-dark shadow-lg py-2" style="background-color: #222222">
    <div class="container collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('public.home') }}">BERANDA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('public.profil') }}">PROFIL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('public.flora') }}">FLORA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('public.fauna') }}">FAUNA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('public.herbarium') }}">HERBARIUM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('public.wisata') }}">TEMPAT WISATA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('public.berita') }}">BERITA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('public.galeri') }}">GALERI</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
    </div>
</nav>
