@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form Data Siswa Kelas 5</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Data Siswa Kelas 5</li>
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
            <form action="{{ route('admin.Siswa5Store') }}" method="post" enctype="multipart/form-data">

                {{-- sertakan csrf token untuk security --}}
                @csrf
                <div class="row">

                  <!-- left column -->
                  <div class="col-md-6">
                    <a href="{{ route('admin.Siswa5Index') }}" class="btn btn-primary mb-3">Kembali</a>

                    <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Form Data Siswa Kelas 5</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <div class="card-body">
                          {{-- Judul --}}
                        <div class="form-group">
                            <label for="exampleInputJudul">Nama Siswa </label>
                            <input type="text" class="form-control" id="exampleInputJudul" name="nama" placeholder="Enter Nama Siswa" value="{{ old('nama') }}">
                            @error('nama')
                              <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Deskripsi --}}
                        <div class="form-group">
                            <label for="exampleInputDeskripsi">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="exampleInputJudul" name="jenis_kelamin"  placeholder="Enter Jenis Kelamin" value="{{ old('jenis_kelamin') }}">
                            @error('jenis_kelamin')
                              <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                          <label for="exampleInputDeskripsi1">Alamat</label>
                          <textarea class="form-control" id="exampleInputDeskripsi1" name="alamat" placeholder="Enter Alamat" value="{{ old('alamat') }}"></textarea>
                          @error('alamat')
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
