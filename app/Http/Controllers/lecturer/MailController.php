<?php

namespace App\Http\Controllers\lecturer;

use App\Http\Controllers\Controller;
use App\Models\DoctorEmailInbox;
use App\Models\Section;
use App\Models\Student;
use App\Models\StudentEmailInbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturer = Auth::guard('lecturer')->user() ;
        $mails = $lecturer->receivedEmails()->get() ;
        return view('lecturer.mail.index' ,  compact('mails')) ;
    }

    /**
     * Display a listing of the resource.
     */
    public function indexSent()
    {
        $lecturer = Auth::guard('lecturer')->user() ;
        $mails = $lecturer->sentEmails()->get() ;
        return view('lecturer.mail.index_sent' ,  compact('mails')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all() ;
        return view('lecturer.mail.create' , compact('students')) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Retrieve logged-in lecturer
        $lecturer_id = Auth::guard('lecturer')->id();  // Assumes authentication

        StudentEmailInbox::create([
            'sender_id' => $lecturer_id,
            'receiver_id' => $request['student_id'],
            'message' => $request->message,
        ]);

        return redirect()->route('lecturer.mail.index_sent') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mail = DoctorEmailInbox::find($id) ;
        return view('lecturer.mail.show' , 'mail') ;
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
