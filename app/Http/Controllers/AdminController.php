<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $articles = Article::with('user')->get();
        return view('admin.index', compact('articles'));
    }
}
