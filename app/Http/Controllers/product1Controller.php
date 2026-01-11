<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class product1Controller extends Controller
{
    public function index()
    {
        return view('frontend.Products.Product1.Index');
    }
}
