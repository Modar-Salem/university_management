<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = ['period', 'question_number', 'correct_question_mark', 'incorrect_question_mark', 'subject_id', 'year_id', 'section_id'];

    public function subject() {
        return $this->belongsTo(Subject::class);
    }
    public function year() {
        return $this->belongsTo(Year::class);
    }

    public function section() {
        return $this->belongsTo(Section::class);
    }

    public function questions()
    {
        return $this->hasMany(QuizQuestion::class , 'quiz_id') ;
    }
}
