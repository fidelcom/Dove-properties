<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('frontend.services.index', compact('services'));
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        $services = Service::where('id', '!=', $id)->limit(6)->get();
        return view('frontend.services.show', compact('service', 'services'));
    }
}
