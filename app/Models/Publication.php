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
        return $this->belongsToMany(ResearchArea::class);
    }
}
