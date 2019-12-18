<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {
        return View('welcome', ['test' => 'Test 1222']);
    }
}
