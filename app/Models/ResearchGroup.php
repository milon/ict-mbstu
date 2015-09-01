<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Faculty;

class ResearchGroup extends Model
{
    protected $table = 'research_groups';

    protected $fillable = [
    	'name',
    	'co_ordinator',
    	'description'
    ];

    public function coOrdinator()
    {
    	return $this->belongsTo(Faculty::class, 'co_ordinator');
    }
}
