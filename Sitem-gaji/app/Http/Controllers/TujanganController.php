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
}
