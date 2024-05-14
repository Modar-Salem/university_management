<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\DoctorEmailInbox;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Auth::guard('student')->user() ;
        $mails = $student->receivedEmails() ;
        return view('student.mail.index' , 'mails') ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lecturer = Lecturer::all() ;
        return view('student.mail.create' , compact('lecturer')) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'year_id' => 'nullable|exists:years,id',
            'section_id' => 'nullable|exists:sections,id',
            'message' => 'required|string',
        ]);

        $lecturer = Lecturer::find($request['lecturer_id']) ;

        DoctorEmailInbox::create([
            'sender_id' => Auth::guard('student')->id(),
            'receiver_id' => $request['lecturer_id'],
            'message' => $request->message,
        ]);

        return response()->json([
            'message' => 'Emails successfully sent to students.',
            'sent_to' => $lecturer->name
        ]);

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
