<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TherapistController extends Controller
{
    public function search(Request $request)
    {
        return view('therapists.search');
    }
}
