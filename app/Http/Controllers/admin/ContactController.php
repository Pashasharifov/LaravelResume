<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact=Contact::all();
        return view('admin.Contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $contact=Contact::create($request->all());
      return redirect()->route('contactIndex', compact('contact'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact=Contact::findOrFail($id);

        return view('admin.Contact.update', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact=Contact::findOrFail($id);
        $contact->update($request->all());
        $contact=Contact::all();
        return redirect()->route('contactIndex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact=Contact::findOrFail($id);
        $contact->delete();
        $contact=Contact::all();
        return redirect()->route('contactIndex');
    }
}
