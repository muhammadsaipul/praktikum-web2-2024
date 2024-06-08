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
                    <li class="breadcrumb-item active">Tambah</li>
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
                    <div class="card-body">
                        <h3 class="card-title">Tambah Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{Route('mahasiswa.store')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
                                @error('nama')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">NPM</label>
                                <input type="text" class="form-control" placeholder="Masukkan NPM" name="npm">
                                @error('npm')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input type="text" class="form-control" placeholder="Masukkan NIK" name="nik">
                                @error('nik')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">No Telp</label>
                                <input type="text" class="form-control" placeholder="Masukkan No Telp" name="no_telp">
                                @error('no_telp')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="" class="">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" value="Laki-Laki">
                                    <label class="form-check-label">
                                        Laki - Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" value="perempuan">
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="jurusan" aria-label="Default select example">
                                    <option selected>Pilih Jurusan</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                </select>
                                @error('jurusan')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Masukkan Email" name="email">
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Username" name="username">
                                        @error('username')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control" placeholder="Masukkan Password" name="password">
                                        @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="{{Route('mahasiswa.index')}}" class="btn btn-light"><i class="fa fa-arrow-back"></i>Kembali</a>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection