<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchArea extends Model
{
    protected $table = 'research_areas';

    protected $fillable = [
    	'name'
    ];

    /**
     * Relationship with Publication
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function publication()
    {
        return $this->belongsToMany(Publication::class)->withTimestamps();
    }
    
}
