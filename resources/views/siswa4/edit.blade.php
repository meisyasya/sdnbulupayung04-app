@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form Edit Data Siswa Kelas 4</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Edit Data Siswa Kelas 4</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <form action="{{ route('admin.Siswa4Update', $siswa->id) }}" method="post" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <!-- Pastikan nama route ini sesuai dengan yang didefinisikan di web.php -->
                  <a href="{{ route('admin.Siswa4Index') }}" class="btn btn-primary mb-3">Kembali</a>

                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Form Edit Data Siswa Kelas 4</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <!-- Nama Siswa -->
                      <div class="form-group">
                          <label for="nama">Nama Siswa</label>
                          <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama Siswa" value="{{ old('nama', $siswa->nama) }}">
                          @error('nama')
                            <small style="color: red">{{ $message }}</small>
                          @enderror
                      </div>

                      <!-- Jenis Kelamin -->
                      <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Enter Jenis Kelamin" value="{{ old('jenis_kelamin', $siswa->jenis_kelamin) }}">
                        @error('jenis_kelamin')
                          <small style="color: red">{{ $message }}</small>
                        @enderror
                      </div>

                      <!-- Alamat -->
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat" rows="4">{{ old('alamat', $siswa->alamat) }}</textarea>
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
