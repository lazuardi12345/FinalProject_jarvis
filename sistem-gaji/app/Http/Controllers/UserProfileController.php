<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "User Profile",
        ];

        return view('contents.userProfile.user', $data);
    }

    public function show()
    {
        $user = Auth::user();
        $data = [
            "title" => "User Profile",
            "user" => $user
        ];
        return view('contents.userProfile.user', $data);
    }
}