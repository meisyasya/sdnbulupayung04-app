@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Data Singkat Sekolah</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Singkat Sekolah</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.datasingkatupdate', $datasingkat->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Data Singkat Sekolah</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                            
                                <!-- siswa -->
<div class="form-group">
    <label for="exampleInputKelebihan1">Masukkan Jumlah Siswa (Wajib Berupa angka)</label>
    <input type="number" class="form-control" id="exampleInputKelebihan1" name="siswa" placeholder="Enter Jumlah Siswa" value="{{ old('siswa', $datasingkat->siswa) }}" min="0" required>
    @error('siswa')
        <small style="color: red">{{ $message }}</small>
    @enderror
</div>

<!-- guru -->
<div class="form-group">
    <label for="exampleInputKelebihan2">Masukkan Jumlah Guru (Wajib Berupa angka)</label>
    <input type="number" class="form-control" id="exampleInputKelebihan2" name="guru" placeholder="Enter Jumlah Guru" value="{{ old('guru', $datasingkat->guru) }}" min="0" required>
    @error('guru')
        <small style="color: red">{{ $message }}</small>
    @enderror
</div>

<!-- tenaga kependidikan -->
<div class="form-group">
    <label for="exampleInputKelebihan3">Masukkan Jumlah Tenaga Kependidikan (Wajib Berupa angka)</label>
    <input type="number" class="form-control" id="exampleInputKelebihan3" name="tenagakependidikan" placeholder="Enter Jumlah Tenaga Kependidikan" value="{{ old('tenagakependidikan', $datasingkat->tenagakependidikan) }}" min="0" required>
    @error('tenagakependidikan')
        <small style="color: red">{{ $message }}</small>
    @enderror
</div>

                               



                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
