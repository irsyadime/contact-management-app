<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $user = Auth::user();

        $contacts = $user->contacts;

        return view('contact',['contacts' => $contacts]);
    }

    public function addContactView(){
        return view('addForm');
    }

    public function toContactUpdateView($id){
        $user = Auth::user();
        $contact = Contact::where('id', $id)
                      ->where('user_id', $user->id)
                      ->firstOrFail();
        return view('updateForm',['contact' => $contact]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->address = $request->input('address');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->user_id = $user->id;
        $contact->save();

        return redirect()->route('contact')->with('success', 'Contact created successfully.');
    }

    public function update(Request $request,$id)
    {
        $user = Auth::user();
        $contact = Contact::where('id', $id)
                      ->where('user_id', $user->id)
                      ->firstOrFail();
    
        $contact->name = $request->input('name');
        $contact->address = $request->input('address');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');

        $contact->save();

        return redirect()->route('contact')->with('success', 'Contact updated successfully.');
    }

    public function delete($id)
    {
        $user = Auth::user();
        $contact = Contact::where('id', $id)
                      ->where('user_id', $user->id)
                      ->firstOrFail();
       
        $contact->delete();
        return redirect()->route('contact')->with('success', 'Contact deleted successfully');
    }
}
