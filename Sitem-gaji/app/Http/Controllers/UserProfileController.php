<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "User Profile",
        ];

        return view('contents.userProfile.user', $data);
    }
}
