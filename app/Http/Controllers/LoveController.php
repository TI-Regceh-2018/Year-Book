<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoveController extends Controller
{
    public function index()
    {
        return view('pages.love');
    }
}
