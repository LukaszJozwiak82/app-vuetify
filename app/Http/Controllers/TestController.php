<?php

namespace App\Http\Controllers;

use App\Category;

class TestController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // dd($categories);
        return View('welcome', ['categories' => $categories]);
    }
}
