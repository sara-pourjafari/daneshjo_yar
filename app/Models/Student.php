<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'FirstName',
        'LastName',
        'phone_Number',
        'Student_Number',
        'national_id',
        'date_of_birth',
        'field_of_study',
        'img_path',

    ];
}
