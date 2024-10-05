@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form Data Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Data Slider</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            {{-- tambahkan route --}}
            <form action="{{ route('admin.SliderStore') }}" method="post" enctype="multipart/form-data">

                {{-- sertakan csrf token untuk security --}}
                @csrf
                <div class="row">

                  <!-- left column -->
                  <div class="col-md-6">
                    <a href="{{ route('admin.SliderIndex') }}" class="btn btn-primary mb-3">Kembali</a>

                    <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Form Data Slider</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <div class="card-body">
                          {{-- Judul --}}
                        <div class="form-group">
                            <label for="exampleInputJudul">Judul </label>
                            <input type="text" class="form-control" id="exampleInputNama1" name="title" placeholder="Enter Judul" value="{{ old('title') }}">
                            @error('title')
                              <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Deskripsi --}}
                        <div class="form-group">
                            <label for="exampleInputDeskripsi">Deskripsi</label>
                            <textarea class="form-control" id="exampleInputDeskripsi" name="description" placeholder="Enter Deskripsi" rows="4">{{ old('description') }}</textarea>
                            @error('description')
                              <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
              
                        <div class="form-group">
                          <label for="exampleInputPhoto1">Gambar</label>
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
