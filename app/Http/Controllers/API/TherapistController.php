<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Therapist;
use Illuminate\Http\Request;

class TherapistController extends Controller
{
    public function get_therapist_card(Request $request)
    {
        $therapists = Therapist::latest();

        if ($request->input('q')) {
            $therapists = $therapists->where('name' , 'like' , '%'.$request->input('q').'%');
        }
        $therapists = $therapists->paginate(20);
        return view('partials.therapist_card' , compact('therapists'));
    }
    public function get_profile_review(Request $request)
    {
        return view('partials.therapist_review_profile');
    }
}
