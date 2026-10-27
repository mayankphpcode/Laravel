<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'student_name',
        'parent_name',
        'phone',
        'email',
        'class',
        'date_of_birth',
        'stu_profile',
        'message',
    ];

    protected function casts(): array
    {
        return [
            'date_of_birth' => 'date',
        ];
    }
}
