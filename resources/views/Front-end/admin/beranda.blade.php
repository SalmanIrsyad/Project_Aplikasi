@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Beranda - Grosir Sembako</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/beranda">
                    <img src="images/logo.png" alt="Logo Kami" width="60" height="54">
                  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/beranda_admin">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/toko_admin">Toko</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/pesanan_admin">Transaksi</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/akun_admin">Pengaturan</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-left text-white">
                    <h1 class="display-4 fw-bolder" align="center">
                        Selamat Datang  <br>
                        Kembali <br></h1>
            </div>
            <br><br><br><br><br>
            <div align="rigth">
                <a href="/toko_admin" class="btn btn-light">Lihat Pesanan<i class="bi bi-chevron-right"></i></a>
            </div>   
        </header>
        <br><br>
        <div class="container" align="left">
            <div class="row">
                <div class="col-5">
                    <img src="images/delivery-truck.png" width="300" height="300"/>
                </div>
                <div class="col-4">
                    <br><br><br><br>
                    <a class="btn btn-outline-dark mt-auto" href="/pesanan_admin"><h3>Lihat Toko  <i class="bi bi-arrow-right"></i></h3></a>
                    
                </div>
            </div>
        <br><br><br>
    </div>
        
              
        <!-- Footer
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

@endsection