<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Success;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $about = About::find(1);
        $team = Team::all();
        $success = Success::all();
        return view('frontend.about_us', compact('about', 'team', 'success'));
    }
}
