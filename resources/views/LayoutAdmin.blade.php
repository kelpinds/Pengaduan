<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Pengaduan</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/layout/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg text-bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" >LAPOR!!</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" href="{{url('/admin/index')}}">Home</a>
              <a class="nav-link active" href="{{url('/admin/validasi')}}">Validasi</a>
              <a class="nav-link active" href="tanggapan">Tanggapan</a>
            </div>
          </div>
          <ul class="nav">
            <li class="nav-item active"><a href="masyarakat/login" class="nav-link link-body-emphasis px-2">Login</a></li>
            <li class="nav-item active"><a href="registrasi" class="nav-link link-body-emphasis px-2">Logout</a></li>
        </ul>
        </div>
      </nav>
     
      @yield('content')
      
      <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>