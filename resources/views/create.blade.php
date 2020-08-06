@extends('layout.main')

@section('title', 'e-Sertifikat AirNav Tnj - Arsip')

@section('container')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h2 class="m-b-10 page-title">Buat Sertifikat</h2>
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
<div class="row mb-4">
    <div class="col-md-12">
        <a href="" class="btn btn-outline-primary" data-toggle="modal" data-target="#addModalCertificate">+ Buat
            sertifikat</a>

        <!-- Modal -->
        <div class="modal fade" id="addModalCertificate" tabindex="-1" role="dialog"
            aria-labelledby="addModalCertificateLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ url('/create') }}" method="post">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalCertificateLabel">Buat
                                sertifikat
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name_participant">Nama peserta</label>
                                <input type="text" class="form-control" id="name_participant" name="name_participant"
                                    placeholder="Nama lengkap">
                            </div>

                            <div class="form-group">
                                <label for="type">Jenis</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="" selected disabled>Pilih judul magang</option>
                                    <option value="kerja_praktik">Kerja Praktik</option>
                                    <option value="ojt">On Job Training</option>
                                    <option value="magang">Magang</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="date_start">Tanggal mulai</label>
                                <input type="date" class="form-control" id="date_start" name="date_start">
                            </div>

                            <div class="form-group">
                                <label for="date_end">Tanggal selesai</label>
                                <input type="date" class="form-control" id="date_end" name="date_end">
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </form>
                </div>
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