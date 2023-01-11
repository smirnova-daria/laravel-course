<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Categories\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
        public function index()
        {
            return view('news.categories',['categories' => Categories::getCategories()]);
        }
        public function show($slug)
        {
            return view('news.category', [
                'news' => News::getNewsByCategorySlug($slug),
                'category' => Categories::getCategoryNameBySlug($slug)
            ]);
        }
}
