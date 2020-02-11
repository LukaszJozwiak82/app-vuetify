<?php

namespace App\Http\Controllers;

use App\Category;
use App\Advertisement;

class TestController extends Controller
{
    private $advertisement;

    public function __construct(Advertisement $advertisement)
    {
        $this->advertisement = $advertisement;
    }

    public function index()
    {
        $categories = Category::all();
        $advertisements = $this->advertisement::where('active', 1)->with('post_images')->orderBy('id', 'desc')->take(4)->get();
        // dd($categories);
        return View('welcome', ['categories' => $categories, 'advertisements' => $advertisements]);
    }
}
