@extends('layouts.app')
@section('content')
<div class="container-fluid position-relative d-flex p-0">
    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="" src="{{ Vite::asset('resources/images/LOGO.png') }}" alt="" style="width: 180px; height: 130px;">
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="{{route('home')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dasbor</a>
                <a href="{{route('Product.index')}}" class="nav-item nav-link active"><i class="fa fa-shopping-cart me-2"></i>Produk</a>
                <a href="{{route('customer.index')}}" class="nav-item nav-link"><i class="fa fa-user-friends me-2"></i>Pelanggan</a>
                <a href="{{route('order')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Penjualan</a>
                <a href="" class="nav-item nav-link"><i class="fa fa-cash-register me-2"></i>Titik Penjualan</a>
                <a href="{{ route('logout') }}" class="nav-item nav-link"><i class="fa fa-sign-out-alt me-2"
                 onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    </i>
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <div class="content">
        <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
            <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <div class="navbar-nav align-items-center ms-auto me-3">
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="rounded-circle me-lg-2 fa fa-user me-2"></i>
                        <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                    </a>
                </div>
            </div>
        </nav>
        {{-- Title + Button  --}}
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="ms-4 mt-4">Tambahkan Produk</h4>
        </div>
        {{-- End Title + Button --}}

        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary rounded p-4">
                <form>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="kodeproduk" class="form-label">Kode Produk</label>
                            <input type="text" class="form-control" name="kodeproduk" id="kodeproduk" placeholder="Masukan Kode Produk">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="namaproduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="namaproduk" id="namaproduk" placeholder="Masukan Nama Produk">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="hargaproduk" class="form-label">Harga Produk</label>
                            <input type="text" class="form-control" name="hargaproduk" id="hargaproduk" placeholder="Masukan Harga Produk">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="stokproduk" class="form-label">Stok Produk</label>
                            <input type="text" class="form-control" name="stokproduk" id="stokproduk" placeholder="Masukan Stok Produk">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="gambarproduk" class="form-label">Gambar Produk</label>
                            <input type="file" class="form-control" name="gambarproduk" id="gambarproduk" style="background-color: rgb(0, 0, 0)">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="deskripsiproduk" class="form-label">Deskripsi Produk</label>
                            <input type="text" class="form-control" name="deskripsproduk" id="deskripsiproduk" placeholder="Masukan Deskripsi Produk">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="statusproduk" class="form-label">Status Produk</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Status Produk</option>
                                <option value="1">Produk Siap Untuk Dijual</option>
                                <option value="2">Produk Belum Siap Untuk Dijual</option>
                              </select>
                        </div>
                        <div class="col-md-6 d-grid">
                            <a href="{{route('Product.index')}}" class="btn btn-danger btn-lg mt-3">Batal Tambahkkan Produk</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <a href="" class="btn btn-success btn-lg mt-3">Tambahkan Produk</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
