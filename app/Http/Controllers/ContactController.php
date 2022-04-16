<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::get();

        return view('home.index', ['contacts' => $contacts]);
    }

    public function create()
    {
        return view('contacts.create.index');
    }

    public function store(Request $request)
    {
        Contact::create($request->all());

        return redirect()->route('site.create')->with('msg', 'Contato criado com sucesso!');
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit.index', ['contact' => $contact]);
    }

    public function show(Contact $contact)
    {
        return 0;
    }
}
