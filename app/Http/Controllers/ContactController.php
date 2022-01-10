<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show()
    {
        if(auth()->user() && auth()->user()->contacts) {
            
            return view('contacts.index', ['contacts_default' => Contact::where('user_id', null)->get(),
                                            'contacts' =>  auth()->user()->contacts]);
        }
        else {
            
            return view('contacts.index', ['contacts_default' => Contact::where('user_id', null)->get()]);
        }
    }

    public function store()
    {
        return view('contacts.create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'biography' => 'required|string|max:255',
        ]);

        Contact::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'phone' => $request->phone,
            'biography' => $request->biography,
        ]);

        return redirect('/');
    }

    public function delete($id)
    {
        Contact::where('id', $id)->delete();
        
        return redirect()->back();
    }
}
