
@extends('layout.main')

@section('title')
    Data Category
@endsection


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Category</li>
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
              <a href="" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalCreate">Tambah Data</a>
              
              @if ($errors->any())
              <div class="my-3">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
                @endif



                @session('success')
                    
                <div class="my-3">
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              </div>
                @endsession
                
            

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Category</h3>
  
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
                        <th>Nama</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                         
                   @foreach ($categories as $item)
                   <tr>
                       {{-- membuat nomer otomatis --}}
                       <td>{{ $loop->iteration }}</td>
                       <td>{{ $item->name }}</td>
                       <td>{{ $item->slug }}</td>
                       <td>{{ $item->created_at }}</td>
                       <td>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}">
                            <i class="fas fa-pen"></i> Edit
                        </a>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $item->id }}">
                            <i class="fas fa-pen"></i> Delete
                        </a>
                                           
                       </td>
                   </tr>

                   {{-- modal --}}
                   @include('berita.category.create-modal')
                   @include('berita.category.update-modal')
                   @include('berita.category.delete-modal')
                    
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

