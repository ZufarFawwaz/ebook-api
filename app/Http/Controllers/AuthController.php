<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return 
        [
            "NIS" => 3103119202,
            "Nama" => "Zufar Fawwaz",
            "Gender" => "Laki-laki",
            "Phone" => 62821352512874,
            "Class" => "XII RPL6"
        ];
    }
}