<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\GetInTouch;
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
        $projectCategories = ProjectCategory::with('project')->get();
        $projects = Project::latest()->get();
        $sliders = Slider::latest()->get();
        $testimonials = Testimonial::latest()->get();
        $services = Service::latest()->get();
        $contact  = Contact::first();
        return view('landing.index', compact('about', 'posts', 'projectCategories', 'projects', 'sliders', 'testimonials', 'services', 'contact'));
    }

    public function contactUs(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        GetInTouch::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 0
        ]);
//        return response()->json(
//            'Your message has been sent successfully!',
//        );

        return redirect()->back()->with([
            'message' => 'Your message has been sent successfully!',
            'alert-type' => 'success'
        ]);
    }
}
