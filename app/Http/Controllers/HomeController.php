<?php

namespace App\Http\Controllers;


use App\Models\Guru;
use App\Models\Misi;
use App\Models\Ppdb;
use App\Models\Visi;
use App\Models\About;
use App\Models\Galeri;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Sarpras;
use App\Models\Category;
use App\Models\Prestasi;
use App\Models\DataSingkat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // parshing data
        $sliders = Slider::all();
        // about bukan crud jdi pake first
        // $about = About::first(); 
        $visi = Visi::first(); 
        $misis = Misi::all();
        $prestasis = Prestasi::all();
        $galeris = Galeri::all();
        $contact = Contact::first();
        $datasingkat = DataSingkat::first();
        $articles = Article::with('category')->whereStatus(1)->latest()->paginate(3);
        return view('home.index',compact(
            'sliders',
            'visi',
            'misis',
            'datasingkat',
            'prestasis',
            'galeris',
             'contact',
             'articles'
        ));
    }
    public function visimisi()
    {
        $visi = Visi::first(); 
        $misis = Misi::all();
        $contact = Contact::first();
        return view('home.visimisi',compact(
            'visi',
            'misis',
            'contact'

        ));
    }
    
    public function about()
    {
        return view('home.about');
    }

    public function sarpras()
    {
        $sarprass = Sarpras::all();
        $contact = Contact::first();
        return view('home.sarpras',compact('sarprass','contact'));
    }
    public function daftarguru()
    {
        $gurus = Guru::all();
        $contact = Contact::first();
        return view('home.daftarguru',compact(
            'gurus',
            'contact'
        ));
    }

    public function daftarsiswa(Request $request)
    {  
        return view('home.daftarsiswa'); 
    //     $kelas = $request->input('kelas');
    // $siswa = [];

    // if ($kelas) {
    //     switch ($kelas) {
    //         case '1':
    //             $siswa = Siswa::all(); // Model untuk kelas 1
    //             break;
    //         case '2':
    //             $siswa = Siswa2::all(); // Model untuk kelas 2
    //             break;
    //         case '3':
    //             $siswa = Siswa3::all(); // Model untuk kelas 3
    //             break;
    //         case '4':
    //             $siswa = Siswa4::all(); // Model untuk kelas 4
    //             break;
    //         case '5':
    //             $siswa = Siswa5::all(); // Model untuk kelas 5
    //             break;
    //         case '6':
    //             $siswa = Siswa6::all(); // Model untuk kelas 6
    //             break;
    //         default:
    //             return response()->json([], 404); // Kelas tidak valid
    //     }
    // }

    // // Debugging: Output data
    // return response()->json($siswa);
    }
    










 

    // prestasi
    public function prestasi()
    {
         // parshing data
         $prestasis = Prestasi::all();
         $contact = Contact::first();
         return view('home.prestasi',compact(
             'prestasis',
             'contact'
        
         ));
    }

    public function galeri()
    {
         // parshing data
         $galeris = Galeri::all();
         $contact = Contact::first();
         return view('home.galeri',compact(
             'galeris',
             'contact'
        
         ));
    }

    public function contact()
    {
        $contact = Contact::first(); 
        return view('home.contact',compact(
            'contact',
        ));

        return view('home.contact' );
    }
    public function ppdb()
    {
        $ppdb = Ppdb::first(); 
        $contact = Contact::first(); 
        return view('home.ppdb',compact(
            'ppdb',
            'contact',
        ));
    }

    public function berita()
    {
        $contact = Contact::first(); 
        $keyword = request()->keyword;
        if($keyword){
        
                $articles = Article::with('Category')
                ->whereStatus(1)
                ->where('title','like','%'.$keyword.'%')
                ->latest()
                ->paginate(6);
    

            }else{
                $articles = Article::with('category')->whereStatus(1)->latest()->paginate(2);
            }
        
        return view('home.beritaa', [
            'latest_post' => Article::latest()->first(), // Ambil artikel terbaru
            'articles' => $articles, // Artikel dengan status 1, paginasi 2 artikel per halaman
            'categories' => Category::latest()->get(), // Ambil semua kategori terbaru
            'contact'=> $contact,
        ]);
        
        // return view ('home.beritaa',[
        //     'latest_post' => Article::latest()->first(),
        //     'articles' => Article::with('category')->whereStatus(1)->latest()->paginate(2),
        //     'categories' => Category::latest()->get(),
        // ]);
    }



}