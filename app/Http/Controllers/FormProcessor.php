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
        $userData = [
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email
        ];

        return response()->json($userData);
    }
}
