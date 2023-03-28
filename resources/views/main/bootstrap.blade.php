</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPP Sekolah</title>
    <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
    @yield('css')
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SPP Sekolah</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ Request::segment(1) =='/' ? 'active' : ''}}" aria-current="page" href="{{ url('/') }}">Home</a>
        <a class="nav-link {{ Request::segment(1) =='/login' ? 'active' : '' }}" href="{{  url('/login') }}">Login</a>
      </div>
    </div>
  </div>
</nav>



<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">SMK MUSSI</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Sign out</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">
                <span data-feather="home" class="align-text-bottom"></span>
                Dilla Sabilla
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/user') }}">
                <span data-feather="file" class="align-text-bottom"></span>
                User
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/siswa') }}">
                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                Siswa
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelas') }}">
                <span data-feather="users" class="align-text-bottom"></span>
                Kelas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/spp') }}">
                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                SPP
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/pembayaran') }}">
                <span data-feather="layers" class="align-text-bottom"></span>
                Pembayaran
              </a>
            </li>
          </ul>


        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">SPP SEKOLAH</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
          </div>
        </div>
        @yield('content')

      </main>
    </div>
  </div>

  <script src="{{ asset ('js/bootstrap.bundle.min.js') }}"></script>

      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    </body>
  </html>
