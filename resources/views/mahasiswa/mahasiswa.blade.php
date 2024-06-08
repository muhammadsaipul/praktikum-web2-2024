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
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active">Mahasiswa</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mt-2">Data Mahasiswa</h3>
                        <a class="btn btn-warning float-right" href="{{Route('mahasiswa.create')}}">Tambah Data</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Nama</th>
                                    <th>NPM</th>
                                    <th>NIK</th>
                                    <th>No Telp</th>
                                    <th>Gender</th>
                                    <th>Jurusan</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mahasiswa as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->npm}}</td>
                                    <td>{{$data->nik}}</td>
                                    <td>{{$data->no_telp}}</td>
                                    <td>{{$data->jk}}</td>
                                    <td>{{$data->jurusan}}</td>
                                    <td>
                                        @if($data->user)
                                        {{$data->user->email}}
                                        @else
                                        user tidak ada
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{Route('mahasiswa.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a class="btn btn-sm btn-success" href="{{Route('mahasiswa.edit',$data->id)}}">
                                                <i class="fa fa-edit"></i>
                                                Edit
                                            </a>
                                            @if(!$data->user)
                                            <a class="btn btn-info" href="{{Route('mahasiswa.generate',$data->id)}}">
                                                <i class="fa fa-user-plus"></i>
                                                Generate User
                                            </a>
                                            @endif
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection