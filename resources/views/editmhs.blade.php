@extends('layouts.main')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Mahasiswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Mahasiswa</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-lg-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="">NPM</label>
                                <input type="text" class="form-control" placeholder="Masukkan NPM">
                            </div>
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input type="text" class="form-control" placeholder="Masukkan NIK">
                            </div>
                            <div class="form-group">
                                <label for="">No Telp</label>
                                <input type="text" class="form-control" placeholder="Masukkan No Telp">
                            </div>
                            <div class="form-group">
                                <label for="" class="">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki">
                                    <label class="form-check-label">
                                        Laki - Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="form-control" aria-label="Default select example">
                                    <option selected>Pilih Jurusan</option>
                                    <option value="1">Teknik Informatika</option>
                                    <option value="2">Sistem Informasi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection