<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
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
        $projects = Project::where('student_id' , Auth::guard('student')->id())->get() ;
        return view('student.project.index' ,compact('projects')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lecturers = Lecturer::all() ;
        return view('student.project.create' ,'lecturers') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project =  Project::create([
            'title' => $request['title']
            ,'student_id' => Auth::guard('student')->id()
            ,'students_name' => $request['student_name']
            ,'master_name' => $request['master_name']
            ,'description' => $request['description']
            ,'doctor_id' => $request['doctor_id'],
        ]) ;
        return redirect()->route('student.project.index') ;
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
