<style>
    /* CSS for main content to push it down */
.main-content {
    padding-top: 50px; /* Reduce the space at the top */
    margin-top: 0; /* Remove extra margin at the top if any */
    min-height: 72vh; /* Adjust to maintain the content's height */
    display: flex;
    flex-direction: column;
    justify-content: flex-start; /* Align items to the top */
}


</style>



@extends('layout.app')

@section('title')
    Daftar Siswa
@endsection

@section('content')

<!-- Breadcrumbs -->
<div class="breadcumbs py-2">
    <div class="container">
        <div class="d-flex justify-content-between text-white">
            <h2>Daftar Siswa</h2>
            <ol class="d-flex list-unstyled">
                <li>Home</li>
                <li>Daftar Siswa</li>
            </ol>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Data Siswa -->
<!-- Data Siswa -->
<div class="main-content bg-light py-5 mt-4">
    <div class="container">
        <div class="title-container text-center">
            <h2 class="text-center fw-bold">DATA SISWA</h2>
        </div>
        <p class="text-center mt-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sapiente qui, voluptate asperiores veritatis a cum soluta maxime consectetur nobis. Quidem, distinctio.
        </p>
        <div class="row mt-5 justify-content-center">
            <!-- Dropdown untuk memilih kelas -->
            <div class="col-sm-8 mb-3">
                <select class="form-select" id="selectKelas">
                    <option value="" selected>Pilih Kelas</option>
                    <option value="1">Daftar Siswa Kelas 1</option>
                    <option value="2">Daftar Siswa Kelas 2</option>
                    <option value="3">Daftar Siswa Kelas 3</option>
                    <option value="4">Daftar Siswa Kelas 4</option>
                    <option value="5">Daftar Siswa Kelas 5</option>
                </select>
            </div>

            <!-- Tabel Siswa -->
            <div id="tableContainer" class="col-sm-8 mb-3" style="display: none;">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Siswa</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            <!-- Data siswa akan dimasukkan di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Data Siswa -->

<!-- End Data Siswa -->

@endsection

@section('scripts')
<script>
   document.addEventListener('DOMContentLoaded', function () {
    const selectKelas = document.getElementById('selectKelas');
    const tableContainer = document.getElementById('tableContainer');
    const tableBody = document.getElementById('tableBody');

    selectKelas.addEventListener('change', function () {
        const selectedValue = selectKelas.value;
        tableBody.innerHTML = ''; // Bersihkan tabel sebelumnya

        if (selectedValue) {
            fetch(`/siswa/${}`) // Ganti URL dengan route API yang benar
                .then(response => response.json())
                .then(data => {
                    if (data.length > 0) {
                        tableContainer.style.display = 'block';

                        data.forEach(siswa => {
                            const row = document.createElement('tr');
                            row.innerHTML = `
                                <th scope="row">${siswa.id}</th>
                                <td>${siswa.nama}</td>
                                <td>${siswa.alamat}</td>
                                <td>${siswa.jenis_kelamin}</td>
                            `;
                            tableBody.appendChild(row);
                        });
                    } else {
                        tableContainer.style.display = 'none';
                    }
                });
        } else {
            tableContainer.style.display = 'none';
        }
    });
});

</script>
@endsection
