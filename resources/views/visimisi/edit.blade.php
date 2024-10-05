@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data Misi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Misi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.MisiUpdate', $misi->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <a href="{{ route('admin.visimisi') }}" class="btn btn-primary mb-3">Kembali</a>

                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Edit Misi</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <!-- Title -->
                                <div class="form-group">
                                    <label for="title">Judul Misi</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul Misi" value="{{ old('title', $misi->title) }}">
                                    @error('title')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Description -->
                                <div class="form-group">
                                    <label for="description">Deskripsi Misi</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi Misi" rows="4">{{ old('description', $misi->description) }}</textarea>
                                    @error('description')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('visimisi') }}" class="btn btn-secondary">Batal</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
