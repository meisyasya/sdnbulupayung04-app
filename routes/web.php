<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Ppdbcontroller;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\Siswa2Controller;
use App\Http\Controllers\Siswa3Controller;
use App\Http\Controllers\Siswa4Controller;
use App\Http\Controllers\Siswa5Controller;
use App\Http\Controllers\Siswa6Controller;


use App\Http\Controllers\SliderController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SarprasController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\Visimisicontroller;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataSingkatController;
use App\Http\Controllers\FrontArticleController;

/*
|--------------------------------------------------------------------------
| Rute Web
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan rute web untuk aplikasi Anda. Ruhomte-rute ini
| dimuat oleh RouteServiceProvider dan semuanya akan terhubung dengan grup
| middleware "web". Buatlah sesuatu yang hebat!
|
*/

Route::get('/contact', [PesanController::class, 'showForm'])->name('contact.form');
Route::post('/contact/send', [PesanController::class, 'sendMessage'])->name('contact.send');

// untuk home
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/visimisi', [HomeController::class, 'visimisi'])->name('visimisi');
Route::get('/sarpras', [HomeController::class, 'sarpras'])->name('sarpras');
Route::get('/daftarguru', [HomeController::class, 'daftarguru'])->name('daftarguru');
// Route untuk daftar siswa berdasarkan kelas
//Route::get('siswa/{kelas}', [HomeController::class, 'daftarsiswa'])->name('daftarsiswa');
// Route untuk menampilkan daftar siswa berdasarkan kelas
Route::get('/daftarsiswa', [HomeController::class, 'daftarsiswa'])->name('daftarsiswa');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');




Route::get('/prestasi', [HomeController::class, 'prestasi'])->name('prestasi');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/artikel', [HomeController::class, 'berita'])->name('berita');
Route::get('/artikel/search', [HomeController::class, 'berita'])->name('search');
Route::get('/p/{slug}', [FrontArticleController::class, 'show']);


Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/ppdb', [HomeController::class, 'ppdb'])->name('ppdb');



// Rute untuk login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-proses', [AuthController::class, 'login_proses'])->name('login-proses');

// Rute untuk logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');






// Rute dengan middleware (pembatasan hak akses)
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function() {

    // Rute untuk dasboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Rute untuk about
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::put('/about/{id}', [AboutController::class, 'update'])->name('aboutupdate');



    //ppdb
    Route::get('/ppdb', [PpdbController::class, 'index'])->name('ppdb');
    Route::put('/ppdb/{id}', [PpdbController::class, 'update'])->name('ppdbupdate');




    // data singkat sekolah
    Route::get('/datasingkat', [DataSingkatController::class, 'index'])->name('datasingkat');
    Route::put('/datasingkat/{id}', [DataSingkatController::class, 'update'])->name('datasingkatupdate');



   // Rute Visi
Route::get('/visimisi', [VisimisiController::class, 'index'])->name('visimisi');
Route::put('/visi/{id}', [VisimisiController::class, 'visiupdate'])->name('visiupdate');

// Rute Misi
Route::get('/misi/create', [VisimisiController::class, 'create'])->name('MisiCreate');
Route::get('/misi/{misi}/edit', [VisimisiController::class, 'editMisi'])->name('MisiEdit');
Route::delete('/misi/{misi}', [VisimisiController::class, 'deleteMisi'])->name('MisiDelete');

Route::post('/misi', [VisimisiController::class, 'storeMisi'])->name('MisiStore');
Route::put('/misi/{misi}', [VisimisiController::class, 'updateMisi'])->name('MisiUpdate');


     // Rute untuk contact
     Route::get('/contact', [ContactController::class, 'index'])->name('contact');
     Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contactupdate');
    //untuk CRUD
    Route::resource('sliders', SliderController::class)->names([
        'index' => 'SliderIndex',
        'create' => 'SliderCreate',
        'store' => 'SliderStore',
        'show' => 'slider.show',
        'edit' => 'SliderEdit',
        'update' => 'SliderUpdate',
        'destroy' => 'SliderDelete',
    ]);
    Route::resource('prestasis', PrestasiController::class)->names([
        'index' => 'PrestasiIndex',
        'create' => 'PrestasiCreate',
        'store' => 'PrestasiStore',
        'edit' => 'PrestasiEdit',
        'update' => 'PrestasiUpdate',
        'destroy' => 'PrestasiDelete',
    ]);
    Route::resource('sarpras', SarprasController::class)->names([
        'index' => 'SarprasIndex',
        'create' => 'SarprasCreate',
        'store' => 'SarprasStore',
        'edit' => 'SarprasEdit',
        'update' => 'SarprasUpdate',
        'destroy' => 'SarprasDelete',  // Tambahkan baris ini
    ]);
    
    
    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });


    
    Route::resource('guru', GuruController::class)->names([
        'index' => 'GuruIndex',
        'create' => 'GuruCreate',
        'store' => 'GuruStore',
        'edit' => 'GuruEdit',
        'update' => 'GuruUpdate',
        'destroy' => 'GuruDelete',
    ]);
    Route::resource('category', CategoryController::class)->names([
        'index' => 'CategoryIndex',
        'create' => 'CategoryCreate',
        'store' => 'CategoryStore',
        'show' => 'Category.show',
        'edit' => 'CategoryEdit',
        'update' => 'CategoryUpdate',
        'destroy' => 'CategoryDelete',
    ])->middleware('UserAccess:1');

    Route::resource('article', ArticleController::class)->names([
        'index' => 'ArticleIndex',
        'create' => 'ArticleCreate',
        'store' => 'ArticleStore',
        'show' => 'ArticleShow',
        'edit' => 'ArticleEdit',
        'update' => 'ArticleUpdate',
        // 'destroy' => 'ArticleDelete',
    ]);
    Route::delete('/admin/article/{id}', [ArticleController::class, 'destroy'])->name('ArticleDelete');


    Route::resource('users', UsersController::class)->names([
        'index' => 'UsersIndex',
        'create' => 'UsersCreate',
        'store' => 'UsersStore',
        'show' => 'Users.show',
        'edit' => 'UsersEdit',
        'update' => 'UsersUpdate',
        'destroy' => 'UsersDelete',
    ]);

    Route::get('/clientside', [ArticleController::class, 'clientside'])->name('clientside');


    Route::resource('galeri', GaleriController::class)->names([
        'index' => 'GaleriIndex',
        'create' => 'GaleriCreate',
        'store' => 'GaleriStore',
        'show' => 'Galeri.show',
        'edit' => 'GaleriEdit',
        'update' => 'GaleriUpdate',
        'destroy' => 'GaleriDelete',
    ]);

















    // kelas 1
    Route::resource('siswa', SiswaController::class)->names([
        'index' => 'SiswaIndex',
        'create' => 'SiswaCreate',
        'store' => 'SiswaStore',
        'show' => 'Siswa.show',
        'edit' => 'SiswaEdit',
        'update' => 'SiswaUpdate',
        'destroy' => 'SiswaDelete',
    ]);
    // kelas 2
    Route::resource('siswa2', Siswa2Controller::class)->names([
        'index' => 'Siswa2Index',
        'create' => 'Siswa2Create',
        'store' => 'Siswa2Store',
        
        'edit' => 'Siswa2Edit',
        'update' => 'Siswa2Update',
        'destroy' => 'Siswa2Delete',
    ]);
    // kelas 3
    Route::resource('siswa3', Siswa3Controller::class)->names([
        'index' => 'Siswa3Index',
        'create' => 'Siswa3Create',
        'store' => 'Siswa3Store',
        'edit' => 'Siswa3Edit',
        'update' => 'Siswa3Update',
        'destroy' => 'Siswa3Delete',
    ]);

      // kelas 4
      Route::resource('siswa4', Siswa4Controller::class)->names([
        'index' => 'Siswa4Index',
        'create' => 'Siswa4Create',
        'store' => 'Siswa4Store',
      
        'edit' => 'Siswa4Edit',
        'update' => 'Siswa4Update',
        'destroy' => 'Siswa4Delete',
    ]);

      // kelas 5
      Route::resource('siswa5', Siswa5Controller::class)->names([
        'index' => 'Siswa5Index',
        'create' => 'Siswa5Create',
        'store' => 'Siswa5Store',
        'edit' => 'Siswa5Edit',
        'update' => 'Siswa5Update',
        'destroy' => 'Siswa5Delete',
    ]);

     // kelas 6
     Route::resource('siswa6', Siswa6Controller::class)->names([
        'index' => 'Siswa6Index',
        'create' => 'Siswa6Create',
        'store' => 'Siswa6Store',
        
        'edit' => 'Siswa6Edit',
        'update' => 'Siswa6Update',
        'destroy' => 'Siswa6Delete',
    ]);
});






