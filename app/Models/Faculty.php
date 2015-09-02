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
    	'bio',
        'education_leave'
    ];

    public function education()
    {
    	return $this->hasMany(Education::class, 'faculty_id');
    }

    public function publication()
    {
        return $this->hasMany(Publication::class, 'faculty_id');
    }

    public function researchGroup()
    {
    	return $this->hasOne(ResearchGroup::class, 'co_ordinator');
    }

    public function getAvatarAttribute()
    {
        if(file_exists(public_path("uploads/faculty/faculty_{$this->id}.jpg"))){
            return url("uploads/faculty/faculty_{$this->id}.jpg");
        }
        return url("images/faculty_default.jpg");
    }

}
