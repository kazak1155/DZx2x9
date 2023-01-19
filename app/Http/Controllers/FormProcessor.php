<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    //
    public function index()
    {
        return view('showForm');
    }

    public function store(Request $request)
    {
        return view('hello',
        [
            'userName' => $request->name
        ]);
    }
}
