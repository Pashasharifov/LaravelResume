<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exp=Experience::get();
        return view('admin.Experience.index', compact('exp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $experience=Experience::create($request->all());
        return redirect()->route('experienceIndex', compact('experience'));
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
        $experience=Experience::findOrFail($id);
        return view('admin.Experience.update', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $experiencee=Experience::findOrFail($id);
        $experiencee->update($request->all());
        $experience=Experience::get();
        return redirect()->route('experienceIndex', compact('experience'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $experiencee=Experience::findOrFail($id);
        $experiencee->delete();
        $experience=Experience::get();
        return redirect()->route('experienceIndex', compact('experience'));

    }
}
