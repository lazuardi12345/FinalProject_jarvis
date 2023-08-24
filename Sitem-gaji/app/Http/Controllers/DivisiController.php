<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            "title" => "Data Divisi",
            "divisions" => Divisi::all(),
        ];

        return view('contents.divisions.divisi', $data);
    }

    public function create()
    {
        return view('contents.divisions.create', [
            "title" => "Divisions Create",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "nama_divisi" => 'required|max:255|min:5',
        ]);


        Divisi::create($validatedData);

        return redirect('/divisions')->with('success', 'Berhasil menambah data.');
    }

    public function show(Divisi $divisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Divisi $divisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Divisi $divisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Divisi $divisi)
    {
        //
    }
}
