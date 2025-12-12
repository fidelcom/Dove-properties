<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class HomeProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('frontend.projects.index', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        $latest = Project::where('id', '!=', $id)->latest()->get();
        return view('frontend.projects.show', compact('project', 'latest'));
    }

    public function edit($id)
    {
        $projects = Project::where('project_category_id', $id)->latest()->get();
        $cat = ProjectCategory::findOrFail($id);
        return view('frontend.projects.category_project', compact('projects', 'cat'));
    }
}
