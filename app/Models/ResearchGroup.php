<?php

namespace App\Models;

use App\Models\Faculty;
use Illuminate\Database\Eloquent\Model;

class ResearchGroup extends Model
{
    protected $table = 'research_groups';

    protected $fillable = [
    	'name',
    	'co_ordinator',
    	'description'
    ];

    /**
     * Relationship with Co-Ordinator
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function coOrdinator()
    {
    	return $this->belongsTo(Faculty::class, 'co_ordinator');
    }

}
