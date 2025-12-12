<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Post;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $about = About::first();
        $posts = Post::latest()->limit(3)->get();
        $projectCategories = ProjectCategory::all();
        $projects = Project::latest()->get();
        $sliders = Slider::latest()->get();
        $testimonials = Testimonial::latest()->get();
        $services = Service::latest()->get();
        return view('landing.index', compact('about', 'posts', 'projectCategories', 'projects', 'sliders', 'testimonials', 'services'));
    }
}
