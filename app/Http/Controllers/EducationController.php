<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::latest()->get();
        return view('backEnd.education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backEnd.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'start_year' => 'required',
            'end_year' => 'required',
            'institute' => 'required',
            'description' => 'required',
        ]);

        $data = $request->all();
        Education::create($data);
        return redirect()->route('admin-education.index')->with('success','Education Info created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $education = Education::find($id);
        return view('backEnd.education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'start_year' => 'required',
            'end_year' => 'required',
            'institute' => 'required',
            'description' => 'required',
        ]);

        $data = $request->all();
        $education =  Education::find($id);
        $education->update($data);
        return redirect()->route('admin-education.index')->with('success','Education Info Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $education = Education::find($id);
        $education->delete();
        return redirect()->route('admin-education.index')->with('success','Education Info Deleted successfully');
    }
}
