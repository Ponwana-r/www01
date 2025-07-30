<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class DemoController extends Controller
{
    public function index()
    {
        $demos = Demo::all();
        return view('demo.index', ['demos' => $demos]);
    }
}
