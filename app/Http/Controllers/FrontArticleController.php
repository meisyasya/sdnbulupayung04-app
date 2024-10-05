<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontArticleController extends Controller
{
    public function show($slug){
        return view('home.artikel.show',[
            'article' => Article::whereSlug($slug)->first(),
            'categories' => Category::latest()->get(), // Ambil semua kategori terbaru
        ]);
    }
}
