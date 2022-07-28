@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Akun - Grosir Sembako</title>
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/beranda">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/toko">Toko</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/transaksi">Transaksi</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/profil">Pengaturan</a></li>
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <br><br>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered border-dark">
                        <tr>
                            <td>Username</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                        </tr>
                        <tr>
                            <td>No.Telepon</td>
                        </tr>
                      </table>
                    
                    <br><br><br><br>
                    <center>
                    <a class="btn btn-outline-dark mt-auto" href="/transaksi">keranjang</a>
                    </center>
                    <br><br><br><br>
                    
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