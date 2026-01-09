<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class katalogController extends Controller
{
    public function index()
    {
        return view('frontend.Katalog.Katalog');
    }
}
