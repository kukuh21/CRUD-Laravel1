<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Jawaban;

class PertanyaanController extends Controller
{
    public function index()
    {
        $data = Pertanyaan::latest()->paginate(5);

        return view('pertanyaan.index', compact('data'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'pertanyaan_nama' => 'required|min:10',
        ]);
        Pertanyaan::create([
            'pertanyaan_nama' => request('pertanyaan_nama'),
        ]);

        return redirect()->route('pertanyaan.index')->with('success', 'Pertanyaan Berhasil Ditambahkan');
    }

    public function edit(Pertanyaan $pertanyaan)
    {
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update(Pertanyaan $pertanyaan)
    {
        $pertanyaan->update([
            'pertanyaan_nama' => request('pertanyaan_nama')
        ]);

        return redirect()->route('pertanyaan.index')->with('info', 'Pertanyaan Berhasil Diupdate');
    }

    public function show(Pertanyaan $pertanyaan)
    {
        $jawaban = Jawaban::where('pertanyaan_id', $pertanyaan->pertanyaan_id)->get();

        return view('pertanyaan.show', compact('pertanyaan','jawaban'));
    }

    public function destroy(Pertanyaan $pertanyaan)
    {
        $pertanyaan->delete();
        return redirect()->route('pertanyaan.index')->with('danger', 'Pertanyaan Berhasil Dihapus');
    }
}
