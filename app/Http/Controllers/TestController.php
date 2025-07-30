<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {
        return view('test.index');
    }
    public function showData()
    {
        $data = ['name' => 'Aom', 'address' => 'Chinag Mai'];
        return view('test.showData')->with('data', $data);
    }
}
