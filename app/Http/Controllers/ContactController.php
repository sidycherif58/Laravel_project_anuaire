<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */

        public function createContact(Request $request){
            $ValidatedData = $request->validate([
                'prenom' => 'required|string|max:100',
                'nom' => 'required|string|max:100',
                'email' => 'required|email',
                'telephone' => 'required',
            ]);
        }
    

        public function index()
    {
    $contacts = Contact::latest()->paginate(10);

    return view('index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */

        public function store(Request $request){
            $data = $request->validate([
                'prenom' => 'required|string|max:100',
                'nom' => 'required|string|max:100',
                'email' => 'required|email|unique:contacts,email',
                'telephone' => 'required|string|max:20',
            ]);
            Contact::create($data);
            return redirect()->route('contacts.index')->with('success', 'Contact ajouteé avec succes');
        }

        

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact) : View
    {
        return view('edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $data = $request->validate([
                'prenom' => 'required|string|max:100',
                'nom' => 'required|string|max:100',
                'email' => ['required', 'email', Rule::unique('contacts', 'email')->ignore($contact->id)],
                'telephone' => 'required|string|max:20',
            ]);
             $contact->update($data);
            return redirect()->route('contacts.show', $contact)->with('success', 'Contact ajouteé avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact supprimer');
    }
}
