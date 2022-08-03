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
        <div class="card">
            <div class="card-body" align="center">
                <div class="card-footer p-0 pt-0 border-top-0 bg-transparent">
                    <div class="text-right">
                        <a class="btn btn-outline-dark mt-auto" href="/produk">Semua</a>
                        <a class="btn btn-outline-dark mt-auto" href="/produk">Makanan</a>
                        <a class="btn btn-outline-dark mt-auto" href="/produk">Minuman</a>
                        <a class="btn btn-outline-dark mt-auto" href="/produk">Barang</a>
                    </div>
                </div>
            </div>
          </div>
          <!-- Menu -->
          <div class="card">
            <div class="card-body">
                <div class="card-footer p-0 pt-0 border-top-0 bg-transparent">
                    <div class="text-right">
                        <div class="row">
                            <div class="col-9">
                                <div class="dropdown">
                                    <label>Urutkan Berdasarkan : </label>
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      Pilih Disini
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item" href="#">Harga</a></li>
                                      <li><a class="dropdown-item" href="#">Barang</a></li>
                                      <li><a class="dropdown-item" href="#">Merek</a></li>
                                    </ul>
                                  </div>
                            </div>
                            <div class="col-3">
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Cari Produk" aria-label="Search">
                                    <button class="btn btn-outline-dark" type="submit">Cari</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>


          
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nama Produk</h5>
                                    <!-- Product price-->
                                    Rp.10.000
                                </div>
                            </div>
                            <br>
                            <!-- Product actions-->
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
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nama Produk</h5>
                                    Rp.100.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-right" align="right">
                                    <table>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/produk"><i class="bi bi-pencil-fill"></i> &nbsp; Edit &nbsp;&nbsp;&nbsp;</a></td>
                                        </tr>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/produk"><i class="bi bi-trash-fill"></i> &nbsp; Hapus</a></td>
                                        </tr>
                                    </table></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nama Produk</h5>
                                    <!-- Product price-->
                                    Rp.50.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-right" align="right">
                                    <table>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/produk"><i class="bi bi-pencil-fill"></i> &nbsp; Edit &nbsp;&nbsp;&nbsp;</a></td>
                                        </tr>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/produk"><i class="bi bi-trash-fill"></i> &nbsp; Hapus</a></td>
                                        </tr>
                                    </table></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nama Produk</h5>
                                    <!-- Product price-->
                                    Rp.50.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-right" align="right">
                                    <table>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/produk"><i class="bi bi-pencil-fill"></i> &nbsp; Edit &nbsp;&nbsp;&nbsp;</a></td>
                                        </tr>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/produk"><i class="bi bi-trash-fill"></i> &nbsp; Hapus</a></td>
                                        </tr>
                                    </table></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nama Produk</h5>
                                    <!-- Product price-->
                                    Rp.75.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-" align="right">
                                    <table>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/produk"><i class="bi bi-pencil-fill"></i> &nbsp; Edit &nbsp;&nbsp;&nbsp;</a></td>
                                        </tr>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/produk"><i class="bi bi-trash-fill"></i> &nbsp; Hapus</a></td>
                                        </tr>
                                    </table></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nama Produk</h5>
                                    <!-- Product price-->
                                    Rp.30.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-right" align="right">
                                    <table>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/produk"><i class="bi bi-pencil-fill"></i> &nbsp; Edit &nbsp;&nbsp;&nbsp;</a></td>
                                        </tr>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/produk"><i class="bi bi-trash-fill"></i> &nbsp; Hapus</a></td>
                                        </tr>
                                    </table></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nama Produk</h5>
                                    <!-- Product price-->
                                    Rp.50.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-right" align="right">
                                    <table>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/produk"><i class="bi bi-pencil-fill"></i> &nbsp; Edit &nbsp;&nbsp;&nbsp;</a></td>
                                        </tr>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/produk"><i class="bi bi-trash-fill"></i> &nbsp; Hapus</a></td>
                                        </tr>
                                    </table></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Nama Produk</h5>
                                    <!-- Product price-->
                                    Rp.20.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-right" align="right">
                                    <table>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/produk"><i class="bi bi-pencil-fill"></i> &nbsp; Edit &nbsp;&nbsp;&nbsp;</a></td>
                                        </tr>
                                        <tr>
                                            <td><a class="btn btn-outline-dark mt-auto" href="/produk"><i class="bi bi-trash-fill"></i> &nbsp; Hapus</a></td>
                                        </tr>
                                    </table></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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