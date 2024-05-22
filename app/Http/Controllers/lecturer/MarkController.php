<?php

namespace App\Http\Controllers\lecturer;

use App\Http\Controllers\Controller;
use App\Models\Mark;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all() ;
        return view('lecturer.mark.index' , compact('subjects')) ;
    }


    public function theoretical_index($subject_id)
    {

        $subject = Subject::find($subject_id) ;
        $marks = Mark::where('subject_id' , $subject_id)->get() ;
        $students = Student::all(); // Assuming you want to list all students

        return view('lecturer.mark.theoretical_index' , compact('marks' , 'subject' , 'students')) ;
    }

    public function practical_index($subject_id)
    {
        $subject = Subject::find($subject_id) ;
        $marks = Mark::where('subject_id' , $subject_id)->get() ;
        $students = Student::all(); // Assuming you want to list all students

        return view('lecturer.mark.practical_index' , compact('marks' , 'subject' , 'students')) ;
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject_id' => 'required|exists:subjects,id',
            'student_id' => 'required|exists:students,id',
            'mark'       => 'required|numeric',
            'lab_mark'   => 'nullable|numeric'
        ]);

        Mark::create([
            'subject_id' => $request->subject_id,
            'student_id' => $request->student_id,
            'mark'       => $request->mark,
            'lab_mark'   => $request->lab_mark
        ]);

        return redirect()->route('lecturer.mark.practical_index', $request->subject_id)
            ->with('success', 'Mark added successfully');
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
