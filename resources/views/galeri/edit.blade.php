@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form Galeri</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Galeri</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <form action="{{ route('admin.GaleriUpdate', $galeri->id) }}" method="post" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <a href="{{ route('admin.GaleriIndex') }}" class="btn btn-primary mb-3">Kembali</a>

                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Form Galeri</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        {{-- Judul --}}
                      <div class="form-group">
                          <label for="exampleInputJudul">Judul  Foto </label>
                          <input type="text" class="form-control" id="exampleInputNama1" name="title" placeholder="Enter Judul Foto" value="{{ old('title', $galeri->title) }}">
                          @error('title')
                            <small style="color: red">{{ $message }}</small>
                          @enderror
                      </div>

                      

                      @if($galeri->image)
                          <img src="{{ asset('storage/photo-user/' . $galeri->image) }}" alt="Current Image" style="max-width: 200px; max-height: 200px;">
                      @endif

                      <div class="form-group">
                          <label for="exampleInputPhoto1">Foto</label>
                          <input type="file" name="photo" class="form-control" id="exampleInputPhoto1">
                          @error('photo')
                              <small style="color: red">{{ $message }}</small>
                          @enderror
                      </div>
                      
                    </div>
                    <!-- /.card-body -->
    
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
