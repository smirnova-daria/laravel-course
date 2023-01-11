<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', ['news' => News::getNews()]);
    }
    public function show($id)
    {
        return view('news.One')->with('news', News::getNewsById($id));
    }
}
