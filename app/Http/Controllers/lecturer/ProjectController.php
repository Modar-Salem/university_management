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
        $projects = Project::where('doctor_id' , Auth::guard('lecturer')->id())->where('type' , 'pending')->get() ;
        return view('lecturer.project.index' ,compact('projects')) ;
    }

    public function index_approved()
    {
        $projects = Project::where('doctor_id' , Auth::guard('lecturer')->id())->where('type' , 'accepted')->get() ;
        return view('lecturer.project.index_approved' ,compact('projects')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $project_id)
    {
        $project = Project::find($project_id) ;
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
