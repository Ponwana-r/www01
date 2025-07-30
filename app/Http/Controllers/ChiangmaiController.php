<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChiangmaiController extends Controller
{
    public function index()
    {
        return view('chiangmai.index');
    }
    public function showdata()
    {
        return view('chiangmai.showdata');
    }
}
