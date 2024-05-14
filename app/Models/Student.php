<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ['year_id', 'section_id', 'name', 'email', 'password', 'image'];

    public function year() {
        return $this->belongsTo(Year::class);
    }

    public function marks()
    {
        return $this->hasMany(Mark::class) ;
    }
    public function section() {
        return $this->belongsTo(Section::class);
    }

    public function receivedEmails() {
        return $this->hasMany(StudentEmailInbox::class, 'receiver_id');
    }

    public function sentEmails() {
        return $this->hasMany(DoctorEmailInbox::class, 'sender_id');
    }

}
