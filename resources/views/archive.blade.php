@extends('layout.main')

@section('title', 'e-Sertifikat AirNav Tnj - Arsip')

@section('container')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h2 class="m-b-10 page-title">Arsip</h2>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item active"><a href="#!">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#!">Arsip</a></li>
                    <li class="breadcrumb-item active"><a href="#!">2017</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#!">Horizontal Layout 2</a></li> -->
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Tampilkan berdasarkan</h5>
            </div>
            <div class="card-body">
                <!-- <p class="lead m-t-0 mb-4">Berdasarkan tahun</p> -->

                <div class="container mt-1 mb-5">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card bg-light" style="box-shadow: none; border: 1px solid rgba(0, 0, 0, .2);">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationDefault04">Tahun</label>
                                            <select class="custom-select" id="validationDefault04" required>
                                                <option selected disabled value="">Choose...
                                                </option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault04">Bulan</label>
                                    <select class="custom-select" id="validationDefault04" required>
                                        <option selected disabled value="">Choose...
                                        </option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
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


<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">
                <div class="tbale-responsive">
                    <table class="table table-hover" id="dataCertificates">
                        <caption>Arsip sertfikat</caption>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th data-orderable="false">Nama</th>
                                <th data-orderable="false">Kegiatan</th>
                                <th>Tanggal</th>
                                <th data-orderable="false">Lokasi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection