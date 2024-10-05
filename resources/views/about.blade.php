@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">d
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Visi Dan Misi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Visi Dan Misi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.aboutupdate', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Visi dan Misi</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <!-- Judul -->
                                <div class="form-group">
                                    <label for="exampleInputJudul">Judul Visi</label>
                                    <input type="text" class="form-control" id="exampleInputJudul" name="judul" placeholder="Enter Judul" value="{{ old('judul', $about->judul) }}">
                                    @error('judul')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Deskripsi 1 -->
                                <div class="form-group">
                                    <label for="exampleInputDeskripsi1">Deskripsi Visi</label>
                                    <textarea class="form-control" id="exampleInputDeskripsi1" name="deskripsi_1" placeholder="Enter Deskripsi 1" rows="4">{{ old('deskripsi_1', $about->deskripsi_1) }}</textarea>
                                    @error('deskripsi_1')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                                

                                <!-- Subjudul -->
                                <div class="form-group">
                                    <label for="exampleInputSubjudul">Judul Misi</label>
                                    <input type="text" class="form-control" id="exampleInputSubjudul" name="subjudul" placeholder="Enter Subjudul" value="{{ old('subjudul', $about->subjudul) }}">
                                    @error('subjudul')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                
                                
                                
                                <!-- Kelebihan 1 -->
                                <div class="form-group">
                                    <label for="exampleInputKelebihan1">Kelebihan 1</label>
                                    <input type="text" class="form-control" id="exampleInputKelebihan1" name="kelebihan_1" placeholder="Enter Kelebihan 1" value="{{ old('kelebihan_1', $about->kelebihan_1) }}">
                                    @error('kelebihan_1')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Kelebihan 2 -->
                                <div class="form-group">
                                    <label for="exampleInputKelebihan2">Kelebihan 2</label>
                                    <input type="text" class="form-control" id="exampleInputKelebihan2" name="kelebihan_2" placeholder="Enter Kelebihan 2" value="{{ old('kelebihan_2', $about->kelebihan_2) }}">
                                    @error('kelebihan_2')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Kelebihan 3 -->
                                <div class="form-group">
                                    <label for="exampleInputKelebihan3">Kelebihan 3</label>
                                    <input type="text" class="form-control" id="exampleInputKelebihan3" name="kelebihan_3" placeholder="Enter Kelebihan 3" value="{{ old('kelebihan_3', $about->kelebihan_3) }}">
                                    @error('kelebihan_3')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Kelebihan 4 -->
                                <div class="form-group">
                                    <label for="exampleInputKelebihan4">Kelebihan 4</label>
                                    <input type="text" class="form-control" id="exampleInputKelebihan4" name="kelebihan_4" placeholder="Enter Kelebihan 4" value="{{ old('kelebihan_4', $about->kelebihan_4) }}">
                                    @error('kelebihan_4')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputKelebihan4">Kelebihan 5</label>
                                    <input type="text" class="form-control" id="exampleInputKelebihan4" name="kelebihan_5" placeholder="Enter Kelebihan 4" value="{{ old('kelebihan_5', $about->kelebihan_5) }}">
                                    @error('kelebihan_4')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputKelebihan4">Kelebihan 6</label>
                                    <input type="text" class="form-control" id="exampleInputKelebihan4" name="kelebihan_6" placeholder="Enter Kelebihan 4" value="{{ old('kelebihan_6', $about->kelebihan_6) }}">
                                    @error('kelebihan_4')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputKelebihan4">Kelebihan 7</label>
                                    <input type="text" class="form-control" id="exampleInputKelebihan4" name="kelebihan_7" placeholder="Enter Kelebihan 7" value="{{ old('kelebihan_7', $about->kelebihan_7) }}">
                                    @error('kelebihan_4')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputKelebihan4">Kelebihan 8</label>
                                    <input type="text" class="form-control" id="exampleInputKelebihan4" name="kelebihan_8" placeholder="Enter Kelebihan 8" value="{{ old('kelebihan_8', $about->kelebihan_8) }}">
                                    @error('kelebihan_4')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputKelebihan4">Kelebihan 9</label>
                                    <input type="text" class="form-control" id="exampleInputKelebihan4" name="kelebihan_9" placeholder="Enter Kelebihan 8" value="{{ old('kelebihan_9', $about->kelebihan_9) }}">
                                    @error('kelebihan_4')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                                <!-- Foto -->
                                    <div class="form-group">
                                        <label for="exampleInputPhoto">Foto</label>
                                        <input type="file" class="form-control" id="exampleInputPhoto" name="photo">
                                        @if($about->photo)
                                            <img src="{{ asset('storage/photos/' . $about->photo) }}" alt="Current Photo" width="100">
                                        @endif
                                        @error('photo')
                                            <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <!-- Deskripsi 2 -->
                                <div class="form-group">
                                    <label for="exampleInputDeskripsi2">Deskripsi Foto</label>
                                    <textarea class="form-control" id="exampleInputDeskripsi2" name="deskripsi_2" placeholder="Enter Deskripsi 2" rows="4">{{ old('deskripsi_2', $about->deskripsi_2) }}</textarea>
                                    @error('deskripsi_2')
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
