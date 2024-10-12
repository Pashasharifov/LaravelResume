<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $education=Education::get();
        return view('admin.Education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $education=Education::create($request->all());
        return redirect()->route('educationIndex', compact('education'));
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
        $education=Education::findOrFail($id);
        return view('admin.Education.update', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $educationn=Education::findOrFail($id);
        $educationn->update($request->all());
        $education=Education::get();
        return redirect()->route('educationIndex', compact('education'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $educationn=Education::findOrFail($id);
        $educationn->delete();
        $education=Education::get();
        return redirect()->route('educationIndex', compact('education'));
    }
}
