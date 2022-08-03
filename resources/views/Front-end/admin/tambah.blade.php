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
                    LOGO
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
        <br><br>
        <!-- Header-->
        <div class="container">
            <div class="card">
                <div class="card-body">
                  <h2 align="center">Tambah Produk</h2>
                  <br>
                  <div class="row">
                    <div class="col-5">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Gambar : </label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Produk :</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Produk">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Harga Produk :</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Harga Produk">
                        </div>
                        <label for="form-floating">Kategori : </label>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                              <option selected>Pilih Kategori</option>
                              <option value="Makanan">Makanan</option>
                              <option value="Minuman">Minuman</option>
                              <option value="Barang">Barang</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-5">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Qty :</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <label for="floatingTextarea2">Deskripsi :</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 235px"></textarea>
                          </div>
                    </div>
                </div>
                </div>
                <br><br>
                <div class="text-right" align="center">
                    <a class="btn btn-outline-dark mt-auto" href="/produk_admin">Kembali</a>
                    <a class="btn btn-outline-dark mt-auto" href="#">Simpan</a>
                </div>
                <br><br><br>
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