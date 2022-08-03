@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Toko - Grosir Sembako</title>
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
        <br><br>
        <div class="container">
            <div align="rigth">
                <a href="/toko_admin" class="btn btn-light">Kembali <i class="bi bi-chevron-right"></i></a>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <img src="images/produk1.jpg" width="400" height="400" />
                            <br><br>
                        </div>
                        <div class="col-5">
                            <h1>Nama Produk</h1>
                            <h4><b>Rp.10.000</b></h4>
                            <br><br>
                            <table>
                                <tr>
                                    <td>Kategori</td>
                                    <td>:</td>
                                    <td>Makanan</td>
                                </tr>
                                <tr>
                                    <td>Jumlah</td>
                                    <td>:</td>
                                    <td>100</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-2">
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-right" align="right">
                                    <table>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/edit_admin"><i class="bi bi-pencil-fill"></i> &nbsp; Edit &nbsp;&nbsp;&nbsp;</a></td>
                                        </tr>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="#"><i class="bi bi-trash-fill"></i> &nbsp; Hapus</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="container">
                  <h3>Detail Produk : </h3>
                <div class="card">
                  <div class="card-body">
                      Produk terbuat dari bahan alami,tidak menggunakan bahan kimia sedikitpun.
                      produk ini sangat terjamin kelezatannya,karena produk ini kami buat dengan cara yang modern.
                      <br><br><br>
                      Untuk pemesanan silahkan isi lengkap agar tidak ada kesalahan,
                      tanyak terlebih dahulu stok kepada kami,untuk memastikan barang masih ada
                  </div>
                </div>
              </div>
            </div>
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