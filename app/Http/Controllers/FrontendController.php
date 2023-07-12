<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
        public function store(ContactRequest $request){

           $incomingData = $request->validated();

          $contact =  Contact::create([
                'name' => $incomingData['name'],
                'email' => $incomingData['name'],
                'message' => $incomingData['name'],
            ]);
            $contact->save();

            return redirect()->route('contact-us')->with('success','Faleminderit qe na kontaktuat!');
        }
}
