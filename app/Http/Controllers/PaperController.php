<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaperController extends Controller
{
    public function papers(Request $request)
    {
       
        return view('papers');
    }
}
