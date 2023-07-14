<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::latest()->paginate(20);
        return view('admin.contact.index',['contacts'=>$contacts]);
    }

    public function show($id){
        $contact = Contact::findOrFail($id);
        return view('admin.contact.show',['contact'=>$contact]);
    }

    public function destroy($id){
        $contact = Contact::findOrFail($id);

        $contact->delete();
        return redirect()->route('contact.index')->with('success','Contact Deleted');
    }
}
