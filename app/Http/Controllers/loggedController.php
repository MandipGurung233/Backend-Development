<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class loggedController extends Controller
{
    //
    public function contact(){
        return view ('contact');
    }

    public function send(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required",
        ]);

        $contact = new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->comment=$request->comment;
        $contact->save();
        return redirect()->back()->with('status','Your queries has been send');
    }

}
