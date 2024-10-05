
@extends('layout.main')

@section('title')
    Data Guru
@endsection


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Guru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Guru</li>
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
                <a href="{{ route('admin.GuruCreate') }}" class="btn btn-primary mb-3">Tambah Data</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                       
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Guru</h3>
  
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
                        <th>Nama Guru</th>
                        <th>Wali Kelas</th>
                        <th>Foto</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                         
                   @foreach ($gurus as $guru)
                   <tr>
                       {{-- membuat nomer otomatis --}}
                       <td>{{ $loop->iteration }}</td>
                       <td>{{ $guru->title }}</td>
                       <td>{{ $guru->description }}</td>
                       <td><img src="{{ asset('storage/photo-user/'.$guru->image) }}" alt="" width="150"></td>
                       <td>
                           <a href="{{ route('admin.GuruEdit', ['guru' => $guru->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                   
                           {{-- modal data target untuk memunculkan validasi --}}
                           <a data-toggle="modal" data-target="#modal-hapus{{ $guru->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                       </td>
                   </tr>
                   
                   <div class="modal fade" id="modal-hapus{{ $guru->id }}">
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div>
                               <div class="modal-body">
                                   <p>Apakah kamu yakin akan menghapus data user <b>{{ $guru->title }}</b>?</p>
                               </div>
                               <div class="modal-footer justify-content-between">
                                   <form action="{{ route('admin.GuruDelete', ['guru' => $guru->id]) }}" method="post">
                                       @csrf
                                       @method('delete')
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                       <button type="submit" class="btn btn-primary">Ya, Hapus data</button>
                                   </form>
                               </div>
                           </div>
                           <!-- /.modal-content -->
                       </div>
                       <!-- /.modal-dialog -->
                   </div>
                   
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

