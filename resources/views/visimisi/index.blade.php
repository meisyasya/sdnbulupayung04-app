@extends('layout.main')
<style>
    .wrap-text {
        white-space: normal; /* Allow text to wrap */
        max-width: 500px;    /* Set a maximum width */
    }
</style>

@section('content')
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Visi Dan Misi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Visi Dan Misi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('admin.visiupdate', $visi->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Visi</h3>
                            </div>

                            <div class="card-body">
                                <!-- Judul -->
                                <div class="form-group">
                                    <label for="exampleInputJudul">Judul Visi</label>
                                    <input type="text" class="form-control" id="exampleInputJudul" name="judul" placeholder="Enter Judul" value="{{ old('judul', $visi->judul) }}">
                                    @error('judul')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Deskripsi 1 -->
                                <div class="form-group">
                                    <label for="exampleInputDeskripsi1">Deskripsi Visi</label>
                                    <textarea class="form-control" id="exampleInputDeskripsi1" name="deskripsi_1" placeholder="Enter Deskripsi 1" rows="4">{{ old('deskripsi_1', $visi->deskripsi_1) }}</textarea>
                                    @error('deskripsi_1')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Foto -->
                                <div class="form-group">
                                    <label for="exampleInputPhoto">Foto</label>
                                    <input type="file" class="form-control" id="exampleInputPhoto" name="photo">
                                    @if($visi->photo)
                                        <img src="{{ asset('storage/photo-user/' . $visi->photo) }}" alt="Current Photo" width="100">
                                    @endif
                                    @error('photo')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Deskripsi 2 -->
                                <div class="form-group">
                                    <label for="exampleInputDeskripsi2">Deskripsi Foto</label>
                                    <textarea class="form-control" id="exampleInputDeskripsi2" name="deskripsi_2" placeholder="Enter Deskripsi 2" rows="4">{{ old('deskripsi_2', $visi->deskripsi_2) }}</textarea>
                                    @error('deskripsi_2')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Data Misi -->
                <div class="col-md-6">
                    <a href="{{ route('admin.MisiCreate') }}" class="btn btn-primary mb-3">Tambah Data Misi</a>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Misi</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        {{-- <th>No</th> --}}
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($misis as $misi)
                                    <tr>
                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                        <td>{{ $misi->title }}</td>
                                        <td class="wrap-text">{{ $misi->description }}</td>
                                        <td>
                                            <a href="{{ route('admin.MisiEdit', ['misi' => $misi->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i> Edit</a>
                                            <a data-toggle="modal" data-target="#modal-hapus{{ $misi->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal-hapus{{ $misi->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah kamu yakin akan menghapus data misi <b>{{ $misi->title }}</b>?</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <form action="{{ route('admin.MisiDelete', ['misi' => $misi->id]) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Ya, Hapus data</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
