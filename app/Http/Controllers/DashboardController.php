<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()

    {
        // Logika untuk menampilkan dashboard
        return view('dashboard',[
            'total_articles' => Article::count(),
            'total_categories' => Category::count(),
            'latest_article' => Article::with('Category')->whereStatus(1)->orderBy('created_at', 'desc')->take(5)->get(),
            'popular_article' => Article::with('Category')->whereStatus(1)->orderBy('views', 'desc')->take(5)->get()

        ]);
    }
}
