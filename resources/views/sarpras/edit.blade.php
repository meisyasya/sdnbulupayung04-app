@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Edit Data Sarana Prasarana</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Edit Data Sarana Prasarana</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.SarprasUpdate', ['sarpra' => $sarpras->id]) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <a href="{{ route('admin.SarprasIndex') }}" class="btn btn-secondary mb-3">Kembali</a>

                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Data Sarana Prasarana</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                {{-- Judul --}}
                                <div class="form-group">
                                    <label for="title">Nama Barang</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $sarpras->title) }}" required>
                                    @error('title')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- Deskripsi --}}
                                <div class="form-group">
                                    <label for="description">Deskripsi Barang</label>
                                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $sarpras->description) }}" required>
                                    @error('description')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- Current Image --}}
@if(old('photo') === null && $sarpras->image) <!-- Check if there's no 'old' image and if an image already exists in the DB -->
<div class="form-group">
    <label>Gambar Saat Ini</label><br>
    <img src="{{ asset('storage/photo-sarpras/' . $sarpras->image) }}" alt="Current Image" style="max-width: 200px; max-height: 200px;">
</div>
@endif

{{-- Upload New Image --}}
<div class="form-group">
<label for="exampleInputPhoto1">Gambar Baru</label>
<input type="file" name="photo" class="form-control" id="exampleInputPhoto1">
@error('photo')
    <small style="color: red">{{ $message }}</small>
@enderror
</div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
            </form>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
