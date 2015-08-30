<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculties';

    protected $fillable = [
    	'name',
    	'email',
    	'phone',
    	'website',
    	'designation',
    	'address',
    	'bio'
    ];

    public function conference()
    {
    	return $this->hasMany(ConferencePublication::class, 'faculty_id');
    }

    public function journal()
    {
    	return $this->hasMany(JournalPublication::class, 'faculty_id');	
    }

    public function education()
    {
    	return $this->hasMany(Education::class, 'faculty_id');
    }

    public function researchGroup()
    {
    	return $this->hasOne(ResearchGroup::class, 'co_ordinator');
    }

}
