<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalPublication extends Model
{
    protected $table = 'journal_publications';

    protected $fillable = [
    	'faculty_id',
    	'name',
    	'description',
    	'link',
    	'year'
    ];

    public function faculty()
    {
    	return $this->belongsTo(Faculty::class);
    }
}
