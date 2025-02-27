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
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="ms-4 mt-4">Manajemen Produk</h4>
                        <a href="{{ route('Product.create') }}" class="me-4 mt-4 btn btn-success"><i class="fas fa-plus"></i> Tambahkan Produk</a>
                    </div>
                        <!-- Recent Sales Start -->
                        <div class="container-fluid pt-4 px-4">
                            <div class="bg-secondary text-center rounded p-4">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                </div>
                                <div class="table-responsive">
                                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                                        <thead>
                                            <tr class="text-white">
                                                <th scope="col">ID</th>
                                                <th scope="col">NAMA</th>
                                                <th scope="col">GAMBAR</th>
                                                <th scope="col">BARCODE</th>
                                                <th scope="col">HARGA</th>
                                                <th scope="col">JUMLAH</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col">CREATE AT</th>
                                                <th scope="col">UPDATE AT</th>
                                                <th scope="col">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>001</td>
                                                <td>SEMEN</td>
                                                <td></td>
                                                <td>1134621</td>
                                                <td>Rp 100.000</td>
                                                <td>1</td>
                                                <td>Barang Sudah Siap</td>
                                                <td>2023-07-09 12.59.03</td>
                                                <td>2023-08-09 11.16.03</td>
                                                <td><a style="background-color: rgba(53, 142, 224, 1)" class="btn btn-sm btn-dark far fa-edit " href=""></a> <a class="mx-3 btn btn-sm btn-primary" href=""><i class="fa fa-trash"></i></td>

                                            </tr>
                                            <tr>
                                                <td>002</td>
                                                <td>PASIR</td>
                                                <td></td>
                                                <td>1135632</td>
                                                <td>Rp 100.000</td>
                                                <td>1</td>
                                                <td>Barang Sudah Siap</td>
                                                <td>2023-10-09 15.59.03</td>
                                                <td>2023-11-09 18.10.03</td>
                                                <td><a style="background-color: rgba(53, 142, 224, 1)" class="btn btn-sm btn-dark far fa-edit " href=""></a> <a class="mx-3 btn btn-sm btn-primary" href=""><i class="fa fa-trash"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Recent Sales End -->






                        <!-- Footer Start -->
                        {{-- <div class="container-fluid pt-4 px-4">
                            <div class="bg-secondary rounded-top p-4">
                                <div class="row">
                                    <div class="col-12 col-sm-6 text-center text-sm-start">
                                        &copy; <a href="#">RYPOS SYSTEM</a>, All Right Reserved.
                                    </div>
                                    <div class="col-12 col-sm-6 text-center text-sm-end">
                                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                        Designed By <a href="https://htmlcodex.com">ThreeDeveloper</a>
                                        <br>Distributed By: <a href="https://themewagon.com" target="_blank">RYPOS SYSTEM</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- Footer End -->
                    </div>
@endsection
