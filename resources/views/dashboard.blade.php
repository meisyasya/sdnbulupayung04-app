@extends('layout.main')

@section('title')
    dashboard
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        {{-- card --}}
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $total_articles }} Artikel</h3>
                <p>Total Artikel</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="#" id="more-articles" class="small-box-footer">
                Info lebih lanjut <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $total_categories }} Kategori</h3>
                <p>Total Kategori</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('admin.CategoryIndex') }}" class="small-box-footer">
                Info lebih lanjut <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
                <p>Pendaftaran Pengguna</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                Info lebih lanjut <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>
                <p>Pengunjung Unik</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="#" class="small-box-footer">
                Info lebih lanjut <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        {{-- end card --}}

        {{-- Container untuk menampung kedua tabel --}}
        <div class="row" id="articles-table" style="display: none;">
          <!-- Kolom untuk Daftar Artikel Terbaru -->
          <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Artikel Terbaru</h3>
              </div>
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Tanggal Publikasi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($latest_article as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->Category->name }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td class="text-center">
                          <a href="{{ route('admin.ArticleShow', $item->id) }}" class="btn btn-sm btn-secondary">Detail</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        
          <!-- Kolom untuk Artikel Terpopuler -->
          <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Artikel Terpopuler</h3>
              </div>
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Views</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($popular_article as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->Category->name }}</td>
                        <td>{{ $item->views }} x</td>
                        <td class="text-center">
                          <a href="{{ route('admin.ArticleShow', $item->id) }}" class="btn btn-sm btn-secondary">Detail</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        {{-- End Table Artikel --}}

        <script>
          // Script untuk menampilkan/menyembunyikan tabel artikel terbaru dan terpopuler
          document.getElementById('more-articles').addEventListener('click', function(event) {
              event.preventDefault(); // Mencegah pengalihan halaman
              
              var table = document.getElementById('articles-table');
              
              // Menampilkan atau menyembunyikan tabel
              if (table.style.display === 'none' || table.style.display === '') {
                  table.style.display = 'flex'; // Gunakan 'flex' agar kedua tabel bisa tampil sejajar
              } else {
                  table.style.display = 'none';
              }
          });
        </script>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
