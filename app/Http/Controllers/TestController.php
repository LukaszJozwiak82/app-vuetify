<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {
        return View('test', ['test' => 'Test 1222']);
    }
}
