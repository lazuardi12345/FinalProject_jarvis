<?php

namespace App\Http\Controllers;

use App\Models\Penggajian;
use Illuminate\Http\Request;

class PenggajianController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Data Gaji",
            "penggajians" => Penggajian::all(),
        ];

        return view('contents.penggajians.penggajian', $data);
    }
    public function create()
    {
        return view('contents.penggajians.create', [
            "title" => " gaji Create",
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "id_employees" => 'required|max:255|min:5',
            "id_divisis" => 'required|max:255|min:5',
            "gaji_pokok" => 'nullable|numeric|min:0'
        ]);


        Penggajian::create($validatedData);

        return redirect('/penggajians')->with('success', 'Berhasil menambah data.');
    }
    
    public function edit($id)
    {
        $data = [
            "title" => "Edit Employee",
            "penggajians" => penggajian::find($id),

        ];

        return view('contents.penggajians.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        $penggajians = penggajian::find($id);

        $validatedData = $request->validate([
            "id_employees" => 'required|max:255|min:3',
            "id_divisis" => 'required|max:255|min:3',
            "gaji_pokok" => 'nullable|numeric|min:0'
        ]);

        $penggajians->update($validatedData);
        return redirect('/penggajians')->with('success', 'Berhasil mengubah data.');
    }

    public function destroy($id)
    {
        $penggajians = penggajian::findOrFail($id);

        $penggajians->delete();

        return redirect('/penggajians')->with('success', 'Gaji berhasil dihapus.');
    }
}
