<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    // Tentukan field yang bisa diisi secara mass-assignment
    protected $fillable = [
        'student_id',
        'instructor_id',
        'message',
    ];

    // Relasi ke Instructor (pastikan model Instructor sudah ada)
    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }

    // Jika perlu, relasi ke Student (bisa gunakan model User jika siswa disimpan di sana)
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
