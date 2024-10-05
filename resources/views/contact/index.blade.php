@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Contact</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if($contact)
                <form action="{{ route('admin.contactupdate', $contact->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-8">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Contact</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">
                                    <!-- Judul -->
                                    <div class="form-group">
                                        <label for="exampleInputJudul">Phone</label>
                                        <input type="text" class="form-control" id="exampleInputJudul" name="judul" placeholder="Enter Nomer Telp" value="{{ old('judul', $contact->judul ?? '') }}">
                                        @error('judul')
                                            <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Subjudul -->
                                    <div class="form-group">
                                        <label for="exampleInputSubjudul">Email</label>
                                        <input type="text" class="form-control" id="exampleInputSubjudul" name="subjudul" placeholder="Enter Email" value="{{ old('subjudul', $contact->subjudul ?? '') }}">
                                        @error('subjudul')
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
            @else
                <p>No contact data available.</p>
            @endif
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
