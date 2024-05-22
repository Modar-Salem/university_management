<?php

namespace App\Http\Controllers\lecturer;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('lecturer.quiz.index', compact('quizzes'));
    }

    public function create()
    {
        $subjects= Subject::all() ;
        return view('lecturer.quiz.create_quiz' , compact('subjects'));
    }

    public  function delete($id)
    {
        $quiz = Quiz::find($id) ;
        $quiz->delete() ;
        return redirect()->back();
    }
    public function store(Request $request)
    {
        $request->validate([
            'period' => 'required',
            'question_number' => 'required',
            'correct_question_mark' => 'required',
            'incorrect_question_mark' => 'required',
            'subject_id' => 'required',
        ]);
        $subject = Subject::find($request['subject_id']) ;
        $request['year_id'] = $subject->year->id  ;
        $request['section_id'] = $subject->section->id  ;


        $quiz = Quiz::create($request->all());
        $quiz_id = $quiz->id ;
        return view('lecturer.quiz.create_quiz_question' , compact('quiz_id'));
    }

}
