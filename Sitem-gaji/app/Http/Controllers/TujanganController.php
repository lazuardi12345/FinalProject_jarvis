<?php

namespace App\Http\Controllers;

use App\Models\tunjangan;
use Illuminate\Http\Request;

class TujanganController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Data Tunjangan",
            "tunjangans" => tunjangan::all(),
        ];

        return view('contents.tunjangans.tunjangan', $data);
    }
    public function create()
    {
        return view('contents.tunjangans.create', [
            "title" => "Tunjangan Create",
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "nama_tunjangan" => 'required|max:255|min:5',
            "nominal" => 'nullable|numeric|min:0'
        ]);


        tunjangan::create($validatedData);

        return redirect('/tunjangans')->with('success', 'Berhasil menambah data.');
    }

    public function edit($id)
    {
        $data = [
            "title" => "Edit Employee",
            "divisions" => tunjangan::find($id),

        ];

        return view('contents.tunjangans.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        $tunjangans = tunjangan::find($id);

        $validatedData = $request->validate([
            "nama_tunjangan" => 'required|max:255|min:3',
            "nominal" => 'nullable|numeric|min:0'
        ]);

        $tunjangans->update($validatedData);
        return redirect('/tunjangans')->with('success', 'Berhasil mengubah data.');
    }

    public function destroy($id)
    {
        $tunjangans = tunjangan::findOrFail($id);

        $tunjangans->delete();

        return redirect('/tunjangans')->with('success', 'Tunjangan berhasil dihapus.');
    }
}
