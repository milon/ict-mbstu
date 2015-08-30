<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchGroup extends Model
{
    protected $table = 'research_groups';

    protected $fillable = [
    	'name',
    	'co_ordiantor',
    	'description'
    ];

    public function coOrdinator()
    {
    	return $this->belongsTo(Faculty::class, 'co_ordiantor');
    }
}
