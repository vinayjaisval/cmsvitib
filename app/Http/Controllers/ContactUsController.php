<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\WebmasterSection;


class ContactUsController extends Controller
{
    public function contact_us()
    {
        return view('frontend.contact_us');
    }

     public function contact_uss()
    {
        return view('frontEnd.blog.blog_details');
    }

    public function store(Request $request)
    {

       
        $validated = $request->validate([
            'nom' => 'required|string',
            
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $contact = new ContactUs();
        $contact->name = $request->input('nom');
        $contact->phone = $request->input('phone');
        $contact->city = $request->input('ville');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();

        return back()->with('success', 'Message envoyé avec succès!');
    }


    public function contacts_form()
    {
        $contacts = ContactUs::orderBy('created_at', 'desc')->paginate(10);
        $GeneralWebmasterSections = WebmasterSection::where('status', 1)->get();
        
        return view('dashboard.contacts_us_form', compact('contacts', 'GeneralWebmasterSections'));
    }
    
    
}
