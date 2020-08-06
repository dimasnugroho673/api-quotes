@extends('layout.main')

@section('title', 'e-Sertifikat AirNav Tnj - Home')

@section('container')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h2 class="m-b-10 page-title">Selamat pagi admin</h2>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item active"><a href="#!">Dashboard</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#!">Horizontal Layout 2</a></li> -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] start -->
<div class="row">

    <!-- [ horizontal-layout ] start -->
    <div class="col-sm-12">
        <div class="card text-white animate__animated animate__fadeInUp"
            style="box-shadow: none; background-color: #0074E8;">
            <div class="card-header">
                <h4 class="text-white">Selamat datang di <span class="font-weight-light"><u><span
                                class="font-italic">e</span>-Sertifikat</u></span> AirNav
                    Tanjungpinang
                </h4>

            </div>
            <div class="card-body">
                <p>In Horizontal Layout V2 - Navigation bar is set in a Horizontal way with
                    fixed width container. It also showing/hidden while scrolling up/down.
                </p>
                <a href="{{ url('/create') }}" class="btn btn-light text-uppercase font-weight-bolder"
                    style="min-width: 170px;"><i class="feather icon-bookmark mr-1"></i>
                    Buat
                    sertifikat</a>
            </div>
        </div>
    </div>
    <!-- [ horizontal-layout ] end -->
</div>
<!-- [ Main Content ] end -->
<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Arsip sertifikat</h5>
            </div>
            <div class="card-body">
                <!-- <p class="lead m-t-0 mb-4">Berdasarkan tahun</p> -->

                <div class="container mt-1 mb-5">
                    <div class="row">
                        <div class="col-md-6">
                            <p> &bull; Berdasarkan tahun <i class="feather icon-align-left ml-1"></i></p>
                            <ul class="timeline">
                                <li>
                                    <a target="_blank" href="sort_by_year.html">2017</a>
                                    <a href="sort_by_year.html" class="ml-5">4
                                        sertifikat</a>
                                </li>
                                <li>
                                    <a href="sort_by_year.html">2018</a>
                                    <a href="sort_by_year.html" class="ml-5">4
                                        sertifikat</a>
                                </li>
                                <li>
                                    <a href="sort_by_year.html">2019</a>
                                    <a href="sort_by_year.html" class="ml-5">7
                                        sertifikat</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Data sertifikat tercetak</h5>
            </div>
            <div class="card-body">
                <div id="pie-chart-1" style="width:100%"></div>
            </div>
        </div>
    </div>


</div>
<!-- [ Main Content ] end -->

@endsection