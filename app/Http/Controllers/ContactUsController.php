<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\GetInTouch;
use App\Models\LetsTalk;
use App\Models\Partner;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contact = Contact::find(1);
        $brands = Partner::all();
        return view('landing.contact_us', compact('contact', 'brands'));
    }

    public function store(Request $request)
    {
//        dd($request->all());
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

    public function show()
    {
        $data = GetInTouch::latest()->get();
        return view('admin.get_in_touch.index', compact('data'));
    }

    public function edit($id)
    {
        $data = GetInTouch::findOrFail($id);

        $data->update([
            'status' => $data->status == 1 ? 0 : 1
        ]);

        return redirect()->back()->with([
            'message' => 'Status updated successfully!',
            'alert-type' => 'success'
        ]);
    }

    public function destroy($id)
    {
        $data = GetInTouch::findOrFail($id);
        $data->delete();
        return redirect()->back()->with([
            'message' => 'Message deleted successfully!',
            'alert-type' => 'success'
        ]);
    }
}
