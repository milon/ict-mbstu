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

    /**
     * Relationship with education
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function education()
    {
    	return $this->hasMany(Education::class, 'faculty_id');
    }

    /**
     * Relationship with publication
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function publication()
    {
        return $this->hasMany(Publication::class, 'faculty_id');
    }

    /**
     * Relationship with journal
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function journal()
    {
        return $this->hasMany(Publication::class, 'faculty_id')->where('type', 'journal');
    }

    /**
     * Relationship with conference
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conference()
    {
        return $this->hasMany(Publication::class, 'faculty_id')->where('type', 'conference');
    }

    /**
     * Relationship with ResearchGroup
     * @return Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function researchGroup()
    {
    	return $this->hasOne(ResearchGroup::class, 'co_ordinator');
    }

    /**
     * Get avatar value
     * 
     * @return string url
     */
    public function getAvatarAttribute()
    {
        if(file_exists(public_path("uploads/faculty/faculty_{$this->id}.jpg"))){
            return url("uploads/faculty/faculty_{$this->id}.jpg");
        }
        return url("images/faculty_default.jpg");
    }

}
