@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Transaksi - Grosir Sembako</title>
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
                <a class="navbar-brand" href="#!">LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/beranda_admin">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/toko_admin">Toko</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/pesanan_admin">Transaksi</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/akun_admin">Pengaturan</a></li>
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <!-- Sidebar -->
   <!-- @include('layouts.component.sidebar') -->
   <div class="container">
    <form class="d-flex">
      <input class="form-control me-2 " type="search" placeholder="No.Pesanan" aria-label="Search">
      <button class="btn btn-outline-dark" type="submit">Cari</button>
    </form>
   </div>
   <br><br>
        <div class="container">
          <div class="row">
            <div class="col-9">
              <div class="card " style="width: 15rem;">
                <div class="card-body">
                  No.Pesanan : 112345577
                </div>
              </div>
            </div>
            <div class="col-3">
              <div align= "right">
              <div class="card " style="width: 15rem;">
                <div class="card-body">
                 17 - 05 - 2022
                </div>
              </div>
            </div>
          </div>
        </div>
            <!-- Produk 1-->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <img src="images/produk1.jpg" width="150" height="150" />
                        </div>
                        <div class="col-5">
                            <h3>Nama Produk</h3>
                            <h6><b>Rp.10.000</b></h6>
                            <h6><b>Qty : 3</b></h6>
                            <br><br>
                        </div>
                    </div>
                </div>
              </div>
              <!-- Produk 2-->
              <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <img src="images/produk1.jpg" width="150" height="150" />
                        </div>
                        <div class="col-5">
                            <h3>Nama Produk</h3>
                            <h6><b>Rp.10.000</b></h6>
                            <h6><b>Qty : 3</b></h6>
                            <br><br>
                        </div>
                    </div>
                </div>
              </div>
              <!-- Metode Pembayaran-->
            <div class="card">
              <div class="card-body">
                <h3>Total Produk : Rp.60.000</h3>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent" align="right">
                  <div class="text-right"><a class="btn btn-outline-dark mt-auto" href="#">Konfirmasi Pemesanan</a></div>
              </div>
              </div>
            </div>
            </div>
          </div>
            <!-- Produk 2-->
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