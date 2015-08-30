<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';

    protected $fillable = [
    	'faculty_id',
    	'name_of_degree',
    	'institute',
    	'year',
    	'remarks'
    ];

    public function faculty()
    {
    	return $this->belongsTo(Faculty::class);
    }
}
