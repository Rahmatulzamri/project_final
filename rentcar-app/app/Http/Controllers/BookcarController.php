<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookcarController extends Controller
{
    public function index()
    {
        return view('partial.bookcar');
    }
}

