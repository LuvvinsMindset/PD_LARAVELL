<?php

namespace App\Http\Controllers;

use App\Models\Kurss;
use Illuminate\Http\Request;

class KursuKontrolleris extends Controller
{
    public function index()
    {
        return response()->json(Kurss::all(), 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nosaukums' => 'required|string|max:255',
            'apraksts' => 'required|string',
            'banera_adrese' => 'required|string',
            'kursantu_skaits' => 'required|integer',
        ]);

        $kurss = Kurss::create($validatedData);

        return response()->json($kurss, 201);
    }
}