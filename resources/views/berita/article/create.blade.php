@extends('layout.main')

@section('title', 'Data Article')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Article</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Article</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    {{-- Display validation errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger my-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Back button --}}
                    <a href="{{ route('admin.ArticleIndex') }}" class="btn btn-primary mb-3">Kembali</a>

                    {{-- Article creation form --}}
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Article</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.ArticleStore') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="category_id">Category</label>
                                            <select name="category_id" id="category_id" class="form-control" required>
                                                <option value="" hidden>-- choose --</option>
                                                @foreach ($categories as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="desc">Deskripsi</label>
                                    <textarea name="desc" id="myeditor" cols="30" rows="10" class="form-control" required>{{ old('desc') }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="img">Image (Max 2MB)</label>
                                    <input type="file" name="img" id="img" class="form-control" accept="image/*" required onchange="previewImage(this)">
                                    {{-- buat preview --}}
                                    <div class="mt-1">
                                        <img src="" alt="Image Preview" class="img-thumbnail img-preview" width="100px" style="display: none;"> <!-- Hide initially -->
                                    </div>
                                </div>
                                

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control" required>
                                                <option value="" hidden>-- choose --</option>
                                                <option value="1">Publish</option>
                                                <option value="0">Private</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="publish_date">Tanggal Publikasi</label>
                                            <input type="date" name="publish_date" id="publish_date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="float-end">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- CKEditor for better display --}}
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>
            var options = {
        filebrowserImageBrowseUrl: '/admin/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/admin/laravel-filemanager/upload?type=Images&_token={{ csrf_token() }}',
        filebrowserBrowseUrl: '/admin/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/admin/laravel-filemanager/upload?type=Files&_token={{ csrf_token() }}',
        clipboard_handleImages: false
    };


    $(document).ready(function() {
        // Initialize CKEditor
        CKEDITOR.replace('myeditor', options);
    });

    // img preview
    function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('.img-preview').attr('src', e.target.result).show(); // Show image
        }
        reader.readAsDataURL(input.files[0]);
    } else {
        $('.img-preview').attr('src', '').hide(); // Hide if no file
    }
}

    </script>
    
@endpush

@endsection
