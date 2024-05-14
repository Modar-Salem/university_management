<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title','student_id' ,'students_name', 'master_name', 'description', 'doctor_id', 'type'];

    public function doctor() {
        return $this->belongsTo(Lecturer::class, 'doctor_id');
    }

    public function student() {
        return $this->belongsTo(Student::class, 'student_id');
    }

}
