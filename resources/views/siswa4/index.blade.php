
@extends('layout.main')

@section('title')
    Data Siswa
@endsection


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Siswa Kelas 4</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Siswa Kelas 4</li>
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
                <a href="{{ route('admin.Siswa4Create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                       
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Siswa Kelas 4</h3>
  
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
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

             
                      @foreach ($siswas as $siswa)
                      <tr>
                          {{-- membuat nomer otomatis --}}
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $siswa->nama }}</td>
                          <td>{{ $siswa->jenis_kelamin }}</td>
                          <td>{{ $siswa->alamat }}</td>
                          <td>
                            <td>
                                <a href="{{ route('admin.Siswa4Edit', ['siswa4' => $siswa->id]) }}" class="btn btn-primary">
                                    <i class="fas fa-pen"></i> Edit
                                </a>
                                
                                {{-- Modal data target untuk memunculkan validasi --}}
                                <a data-toggle="modal" data-target="#modal-hapus{{ $siswa->id }}" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </a>
                            </td>
                            
                        </td>
                        
                      </tr>
                      
                      <div class="modal fade" id="modal-hapus{{ $siswa->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah kamu yakin akan menghapus data user <b>{{ $siswa->nama }}</b>?</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <form action="{{ route('admin.Siswa4Delete', ['siswa4' => $siswa->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Ya, Hapus data</button>
                                    </form>
                                </div>
                            </div>
                        </div>
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

