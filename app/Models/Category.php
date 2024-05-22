<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' , 'subject_id'
    ] ;

    public function  subject()
    {
        return $this->belongsTo(Subject::class) ;
    }

    public function students()
    {
        return $this->belongsToMany(Student::class , 'students_categories' ) ;
    }

}
