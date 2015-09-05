<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = 'publications';

    protected $fillable = [
    	'faculty_id',
    	'name',
    	'description',
    	'link',
    	'year',
        'type'
    ];

    public function faculty()
    {
    	return $this->belongsTo(Faculty::class);
    }

    public function researchArea()
    {
        return $this->belongsToMany(ResearchArea::class)->withTimestamps();
    }

    public function scopeJournal($query)
    {
        return $query->where('type', 'journal');
    }

    public function scopeConference($query)
    {
        return $query->where('type', 'conference');
    }

}
