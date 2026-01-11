<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sewaController extends Controller
{
    public function index()
    {
        return view('frontend.PartsService.Sewa.Index');
    }
}
