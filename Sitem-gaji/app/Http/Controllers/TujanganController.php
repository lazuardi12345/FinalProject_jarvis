<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TujanganController extends Controller
{
    public function index()
    {

        return view('contents.tunjangans.tunjangan',);
    }
}
