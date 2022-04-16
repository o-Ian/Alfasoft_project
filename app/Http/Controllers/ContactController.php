<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
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

    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->all());

        return redirect()->route('site.home', ['contact' => $contact])->with('msg', 'Contato editado com sucesso!');
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show.index', ['contact' => $contact]);
    }
}
