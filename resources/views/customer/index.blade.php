<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <title> {{ $pageTitle }} <title> --}}
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('public/fontawesome/css/all.css')}}">

    @vite(['/resources/css/style.css'])
    @vite(['/resources/css/bootstrap.min.css'])
    @vite(['/resources/sass/app.scss'])
    @vite(['/lib/owlcarousel/assets/owl.carousel.min.css'])
    @vite(['/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'])

</head>

<body>
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
                    <a href="{{route('Product.index')}}" class="nav-item nav-link"><i class="fa fa-shopping-cart me-2"></i>Produk</a>
                    <a href="{{route('customer.index')}}" class="nav-item nav-link active"><i class="fa fa-user-friends me-2"></i>Pelanggan</a>
                    <a href="{{route('order')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Penjualan</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-cash-register me-2"></i>Titik Penjualan</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-cog me-2"></i>Setting</a>
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

            <!-- Navbar Start -->
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
            <!-- Navbar End -->
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h4 class="ms-4 mt-4">Manajemen Pelanggan</h4>
                <a href="" class="btn btn-success me-4 mt-4"><i class="fas fa-plus"></i> Add New Customer</a>
            </div>




             <!-- Recent Sales Start -->
             <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Manajemen Pelanggan </h6>
                        <a href="">Lihat Semua</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th  scope="col">Avatar</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">NO.Tel</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td></td>
                                    <td>hanif bahy hasyid</td>
                                    <td>admin@admin1</td>
                                    <td>089666530317</td>
                                    <td>sidoarjo</td>
                                    <td>10 JANUARI 2023</td>
                                    <td><a style="background-color: rgba(53, 142, 224, 1)" class=" mx-3 btn btn-sm btn-dark far fa-edit " href=""></a> <a class=" btn btn-sm btn-primary" href=""><i class="fa fa-trash"></i></td>

                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td></td>
                                    <td>fahri firdaus</td>
                                    <td>admin@admin2</td>
                                    <td>08976546564</td>
                                    <td>sidoarjo</td>
                                    <td>15 JANUARI 2023</td>
                                    <td><a style="background-color: rgba(53, 142, 224, 1)" class=" mx-3 btn btn-sm btn-dark far fa-edit " href=""></a> <a class=" btn btn-sm btn-primary" href=""><i class="fa fa-trash"></i></td>
                                <tr>
                                    <td>003</td>
                                    <td></td>
                                    <td>ansar nur jamas</td>
                                    <td>admin@admin3</td>
                                    <td>0897766654454</td>
                                    <td>surabaya</td>
                                    <td>20 JANUARI 2023</td>
                                    <td><a  style=" background-color: rgba(53, 142, 224, 1)" class="mx-3 btn btn-sm btn-dark far fa-edit " href=""></a> <a class=" btn btn-sm btn-primary" href=""><i class="fa fa-trash"></i></td>
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

<!-- Template Javascript -->
{{-- <script src="js/main.js"></script> --}}
<script src="{{ asset('resources/js/jquery.js') }}"></script>
<script src="{{ asset('resources/js/fa.js') }}"></script>
<script src="{{ asset('resources/js/main.js') }}"></script>
<script src="{{ asset('lib/chart/chart.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

</body>
</html>
