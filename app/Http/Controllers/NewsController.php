<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('news', ['news' => News::getNews()]);
    }
    public function show($id)
    {
        return view('newsOne')->with('news', News::getNewsById($id));
    }
}