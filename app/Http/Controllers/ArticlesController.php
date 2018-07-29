<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function create()
    {
        return view('articles.create');
    }

    public function createSubmit(Request $request)
    {
        $fields = array_merge($request->all(), [
            'user_id' => Auth::user()->id
        ]);
        Article::create($fields);

        return redirect()->route('admin-index')->with('status', 'Article created');
    }
}
