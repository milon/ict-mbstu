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

    /**
     * Relationship with Faculty
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
    	return $this->belongsTo(Faculty::class);
    }

    /**
     * Relationship with ResearchArea
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function researchArea()
    {
        return $this->belongsToMany(ResearchArea::class)->withTimestamps();
    }

    /**
     * Query scope for journal
     * 
     * @param  string $query 
     * @return $this        
     */
    public function scopeJournal($query)
    {
        return $query->where('type', 'journal');
    }

    /**
     * Query scope for conference
     * 
     * @param  string $query
     * @return $this
     */
    public function scopeConference($query)
    {
        return $query->where('type', 'conference');
    }

}
