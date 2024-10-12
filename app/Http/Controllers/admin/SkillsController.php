<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills=Skills::get();
        return view('admin.Skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $skills=Skills::create($request->all());
        
        return redirect()->route('skillsIndex', compact('skills'));
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
        $skills=Skills::findOrFail($id);
        return view('admin.Skills.update', compact('skills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skills=Skills::findOrFail($id);
        $skills->update($request->all());
        $skills=Skills::get();
        return redirect()->route('skillsIndex', compact('skills'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skills=Skills::findOrFail($id);
        $skills->delete();
        $skills=Skills::get();
        return redirect()->route('skillsIndex', compact('skills'));

    }
}
