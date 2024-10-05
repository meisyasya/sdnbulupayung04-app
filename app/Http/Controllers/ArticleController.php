<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Requests\ArticleRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    if (request()->ajax()) {
        // Mengambil data artikel beserta kategori menggunakan eager loading
        $articles = Article::with('category')->latest()->get();

        // Menggunakan DataTables untuk mengelola data yang diambil
        return DataTables::of($articles)
            ->addIndexcolumn()
            // Menambahkan kolom kategori dengan nama kategori
            ->addColumn('category_id', function($article) {
                return $article->category->name;
            })
            // Menambahkan kolom action dengan tombol edit, delete, dll.
            ->addColumn('button', function($article) {
                return '<div class="text-center">
                    <a href="' . route('admin.ArticleShow', $article->id) . '" class="btn btn-secondary btn-sm">Detail</a>
                    <a href="' . route('admin.ArticleEdit', $article->id) . '" class="btn btn-primary btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm" onclick="deleteArticle(this)" data-id="'.$article->id.'" >Delete</a>
                </div>';
            })
            
            // Mengizinkan HTML pada kolom kategori dan button
            ->rawColumns(['category_id', 'button'])
            ->make(true);
    }

    // Jika bukan request AJAX, kembalikan view biasa
    return view('berita.article.index');
}



    public function clientside(Request $request) {
        // Ambil semua data dari model Article
        $articles = Article::with('Category')->get(); // Pastikan relasi dengan Category dimuat
    
        // Kembalikan data ke view
        return view('berita.article.indexx', compact('articles'));
    }
    
    

    // /**
    //  * Show the form for creating a new resource.
    //  */
     public function create()
     {
        return view('berita.article.create',[
            'categories' => Category::get()
        ]); 
     }

    
     public function store(ArticleRequest $request)
     {
         $data = $request->validated();
         
         // Log data yang sudah divalidasi
         Log::info('Data validasi: ', $data);
         
         if ($request->hasFile('img')) {
             $file = $request->file('img');
             $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
             $file->storeAs('public/back/', $fileName);
             $data['img'] = $fileName;
         } else {
             Log::warning('No image file uploaded');
         }
     
         $data['slug'] = Str::slug($data['title']);
         
         // Cek apakah artikel berhasil disimpan
         $article = Article::create($data);
         Log::info('Article created: ', ['id' => $article->id]);
     
         return redirect()->route('admin.ArticleIndex')->with('success', 'Article created successfully.');
     }
    
     public function show(string $id)
     {
        
         $article = Article::findOrFail($id); // Temukan artikel berdasarkan ID
        return view('berita.article.show', compact('article')); // Tampilkan detail artikel
     }

   
     public function edit(string $id)
    {
        return view('berita.article.update',[
            'article' => Article::find($id),
            'categories' => Category::get()
        ]); 
     }

     public function update(UpdateArticleRequest $request, string $id)
     {
         // Mengambil data yang sudah divalidasi
         $data = $request->validated();
         
         // Log data validasi
         Log::info('Data validasi: ', $data);
         
         // Jika ada gambar baru yang diunggah
         if ($request->hasFile('img')) {
             $file = $request->file('img');
             $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
             $file->storeAs('public/back/', $fileName);
     
             // Hapus gambar lama jika ada
             if ($request->oldImg) {
                 Storage::delete('public/back/'.$request->oldImg);
             }
     
             // Simpan nama file baru di database
             $data['img'] = $fileName;
         } else {
             // Jika tidak ada gambar baru, gunakan gambar lama
             $data['img'] = $request->oldImg;
         }
     
         // Generate slug dari title
         $data['slug'] = Str::slug($data['title']);
         
         // Update data artikel berdasarkan ID
         Article::find($id)->update($data);
     
         // Redirect ke halaman indeks artikel dengan pesan sukses
         return redirect()->route('admin.ArticleIndex')->with('success', 'Data article has been updated');
     }
     


     public function destroy($id)
    {
        Log::info("Attempting to delete article with ID: $id");
        
        $article = Article::find($id);
        if (!$article) {
            Log::warning("Article not found for ID: $id");
            return response()->json(['success' => false, 'message' => 'Article not found'], 404);
        }

        // Hapus gambar jika ada
        if ($article->img) {
            $imagePath = 'public/back/' . $article->img;
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
                Log::info("Deleted image: " . $article->img);
            } else {
                Log::warning("Image not found: " . $article->img);
            }
        }

        $article->delete();
        Log::info("Article deleted successfully: $id");
        
        return response()->json(['success' => true, 'message' => 'Article deleted successfully'], 200);
    }

}
