<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumni';

    protected $fillable = [
    	'name',
    	'student_id',
    	'degree',
    	'passing_year',
    	'email',
    	'website',
    	'description'
	];
}
