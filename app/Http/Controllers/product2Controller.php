<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class product2Controller extends Controller
{
    public function index()
    {
        return view('frontend.Products.product2.Index');
    }
}
