<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first(); // Mengambil satu record
        return view('contact.index', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'subjudul' => 'required|string|max:255',
        ]);
        
        $contact = Contact::findOrFail($id);
        $contact->update($request->only(['judul', 'subjudul']));
        
        return redirect()->route('admin.contact')->with('success', 'Data updated successfully');
    }
}
