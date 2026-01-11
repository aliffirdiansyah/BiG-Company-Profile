<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class artikelController extends Controller
{
    public function index()
    {
        return view('frontend.Artikel.Artikel');
    }
}
