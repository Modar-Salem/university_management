<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'details', 'year_id', 'section_id', 'lab_degrees', 'exam_degrees'];

    public function year() {
        return $this->belongsTo(Year::class);
    }

    public function section() {
        return $this->belongsTo(Section::class);
    }
}
