<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Jawaban;

class JawabanController extends Controller
{
    public function store(Request $request, Pertanyaan $pertanyaan)
    {
        Jawaban::create([
            'pertanyaan_id' => $request->pertanyaan_id,
            'jawaban' => $request->jawaban,
        ]);

        return redirect()->back();
    }
}
