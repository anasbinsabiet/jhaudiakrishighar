<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_id',
            'reg_number',
            'incorrect_name',
            'correct_name',
            'efemale',
            'father',
            'mother',
            'mobile',
            'email',
            'address',
            'essc',
            'birthdate',
            'birthplace',
            'deathhdate',
            'deathplace',
            'emale',
            'app_photo',
            'certificate_type',
            'exam',
            'year',
            'institute',
            'board',
            'country',
            'group',
            'result',
            'sub1',
            'sub2',
            'sub3',
            'sub4',
            'sub5',
            'sub6',
            'sub7',
            'sub8',
            'sub9',
            'sub10',
            'sub11',
            'sub12',
            'birth_certificate',
            'death_certificate',
            'citizen_certificate',
            'reg_card',
            'admit_card',
            'marksheet',
            'ssc_certificate',
            'board_testimonial',
    ];
}
