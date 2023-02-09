<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;

class Test1Controller extends Controller
{
    public function index()
    {
        $data = Province::orderBy('name')->get();
        return view('test1', compact('data'));
    }
}
