<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class HomeProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('landing.projects.index', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        $latest = Project::where('id', '!=', $id)->latest()->get();
        $contact = Contact::first();
        return view('landing.projects.show', compact('project', 'latest', 'contact'));
    }

    public function edit($id)
    {
        $projects = Project::where('project_category_id', $id)->latest()->get();
        $cat = ProjectCategory::findOrFail($id);
        return view('landing.projects.category_project', compact('projects', 'cat'));
    }
}
