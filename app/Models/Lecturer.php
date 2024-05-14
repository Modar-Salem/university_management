<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Lecturer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ['name', 'email', 'password', 'details'];

    public function subjects() {
        return $this->belongsToMany(Subject::class, 'subjects_lecturers');
    }
    public function receivedEmails() {
        return $this->hasMany(DoctorEmailInbox::class, 'receiver_id');
    }

    public function sentEmails() {
        return $this->hasMany(StudentEmailInbox::class, 'sender_id');
    }


}
