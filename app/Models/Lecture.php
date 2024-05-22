<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'pdf' , 'subject_id'
    ] ;

    public function subject()
    {
        return $this->belongsTo(Subject::class ) ;
    }
}
