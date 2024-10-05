@extends('layout.main')

@section('title')
    Data Sarana Prasarana
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Sarana Prasarana</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Sarana Prasarana</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
   
        <div class="row">
            <div class="col-12">
              {{-- data prestasi --}}
                <a href="{{ route('admin.SarprasCreate') }}" class="btn btn-primary mb-3">Tambah Data</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Sarana Prasarana</h3>
  
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                   @foreach ($sarprass as $sarpras)
                   <tr>
                       {{-- membuat nomer otomatis --}}
                       <td>{{ $loop->iteration }}</td>
                       <td>{{ $sarpras->title }}</td>
                       <td>{{ $sarpras->description }}</td>
                       <td><img src="{{ asset('storage/photo-sarpras/'.$sarpras->image) }}" alt="" width="150"></td>
                       <td>
                           <a href="{{ route('admin.SarprasEdit', ['sarpra' => $sarpras->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a> 
                   
                           {{-- modal data target untuk memunculkan validasi --}}
                           <a data-toggle="modal" data-target="#modal-hapus{{ $sarpras->id }}" class="btn btn-danger">
                               <i class="fas fa-trash-alt"></i> Hapus
                           </a>

                           <!-- Modal for Delete Confirmation -->
                           <div class="modal fade" id="modal-hapus{{ $sarpras->id }}" tabindex="-1" role="dialog" aria-labelledby="modalHapusLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="modalHapusLabel">Konfirmasi Hapus</h5>
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                       </div>
                                       <div class="modal-body">
                                           Apakah Anda yakin ingin menghapus Sarpras ini? 
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                           <form action="{{ route('admin.SarprasDelete', ['sarpra' => $sarpras->id]) }}" method="POST" style="display:inline;">
                                               @csrf
                                               @method('DELETE')
                                               <button type="submit" class="btn btn-danger">Hapus</button>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </td>
                   </tr>
                   @endforeach

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
