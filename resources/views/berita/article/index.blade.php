@extends('layout.main')

{{-- Panggil CSS --}}
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush

@section('title', 'Data Article')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Article</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Article</li>
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
                    {{-- Tombol Tambah Article --}}
                    <a href="{{ route('admin.ArticleCreate') }}" class="btn btn-primary mb-3" >Tambah Article</a>
                    
                    {{-- Tampilkan error validasi --}}
                    @if ($errors->any())
                        <div class="alert alert-danger my-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Tampilkan pesan sukses --}}
                    {{-- @if (session('success'))
                        <div class="alert alert-success my-3">
                            {{ session('success') }}
                        </div>
                    @endif --}}

                    {{--  sweet alert--}}
                    <div class="swal" data-swal="{{ session('success') }}"></div>

                    {{-- Tabel Data --}}
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Article</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-hover table-bordered" id="dataTable">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Views</th>
                                        <th>Status</th>
                                        <th>Publish Date</th>
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Data akan dimuat dari server --}}
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
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
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- alert success --}}
    <script>
        // Mengambil data dari session menggunakan .swal
        const swal = $('.swal').data('swal');
        if (swal) {
            Swal.fire({
                'title': 'Success',
                'text': swal,
                'icon': 'success',
                'showConfirmButton': false,
                'timer': 2000
            });
        }

        
        function deleteArticle(e) {
            let id = e.getAttribute('data-id');
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Artikel ini akan dihapus secara permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Memperbaiki typo di sini
                },
                url: '/admin/article/' + id,
                type: 'DELETE',
                dataType:"json",
                success: function(response){
                    Swal.fire({
                        title:'Success',
                        text: response.message,
                        icon: 'success',

                    }).then((result) => {
                        window.location.href = '/admin/article/'
                    } )
                },
                error : function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError)
                }
            });
        }
    });
}




        // delete
    </script>
    



    {{-- data table --}}
    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url()->current() }}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', title: 'No' },
                { data: 'title', name: 'title', title: 'Judul' },
                { data: 'category_id', name: 'category_id', title: 'Kategori' },
                { data: 'views', name: 'views', title: 'Views' },
                { data: 'status', name: 'status', title: 'Status', render: function(data, type, row) {
                    return data == 0 ? '<span class="badge bg-danger">Private</span>' : '<span class="badge bg-success">Published</span>';
                }},
                { data: 'publish_date', name: 'publish_date', title: 'Tanggal Publikasi' },
                { data: 'button', name: 'button', title: 'Action', orderable: false, searchable: false },
            ],
            responsive: true,
            paging: true,
            lengthChange: true,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: false,
            language: {
                paginate: {
                    previous: "Sebelumnya",
                    next: "Selanjutnya"
                },
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ entri",
                info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                infoEmpty: "Tidak ada data tersedia",
                infoFiltered: "(difilter dari _MAX_ total entri)"
            }
        });
    });
    </script>
@endpush

@endsection
