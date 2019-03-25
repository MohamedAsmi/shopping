<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontorller extends Controller
{
    public function Home()
    {
        return view('Home');
    }
    public function store(Request $request)
    {
        return $request->all();
    }
}
