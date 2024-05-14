<?php

namespace App\Http\Controllers\lecturer;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $projects = Project::where('doctor_id' , Auth::guard('lecturer'))->get() ;
            return view('lecturer.project.index' ,compact('projects')) ;
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::find($id) ;
        $project->update([
            'type' => $request['type']
        ]) ;
        return redirect()->route('lecturer.project.index') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
