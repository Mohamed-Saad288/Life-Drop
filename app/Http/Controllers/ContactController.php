<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        Contact::create($attributes);
        return redirect('/')->with('success','Message Sent Successfully');
    }
    public function admin()
    {
        $contact = Contact::latest()->simplePaginate(5);
        return view('admin.contact',['contacts' => $contact]);
    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success','Contact Deleted Successfully');
    }

}
