<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
    <div class="container">
        <a class="navbar-brand mb-0 h1"><i class="bi bi-shop"></i> Data Master Barang</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-lg-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link active">Beranda</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('employees.index') }}" class="nav-link">Daftar Barang</a></li>
            </ul>

            <hr class="d-lg-none text-white-50">

            <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi bi-person-circle me-1"></i> Profil Saya</a>
        </div>
    </div>
</nav>

<div class="bg-image bg-info text-white text-center py-5">
    <h1 class="display-4 fw-bold">Selamat Datang di Website Kami</h1>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2 id="products" class="text-center mb-5">Produk</h2>
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title">Produk 1</h5>
                    <p class="card-text">Barang yang kami jual sangat berkualitas.</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-info btn-sm" href="#">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2 id="about" class="text-center mb-5">Tentang Kami</h2>
            <p>Kami menyediakan barang sesuai kebutuhan rumah tangga anda.</p>
        </div>
    </div>
</div>
    @vite('resources/js/app.js')
</body>
</html>
