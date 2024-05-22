<?php

namespace App\Http\Controllers\lecturer;

use App\Http\Controllers\Controller;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;

class QuizQuestionController extends Controller
{

    public function store(Request $request, $quiz_id)
    {
        $request->validate([
            'question' => 'required',
            'option1' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required',
            'correct_option' => 'required',
        ]);

        $question = new QuizQuestion($request->all());
        $question->quiz_id = $quiz_id;
        $question->save();

        return redirect()->route('lecturer.quiz.index')->with('success', 'Question added successfully');
    }
}
