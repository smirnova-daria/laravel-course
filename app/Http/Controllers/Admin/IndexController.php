<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function addNews()
    {
        return view('admin.addNews');
    }
    public function test2()
    {
        return view('admin.test2');
    }
}
