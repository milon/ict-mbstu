<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
    	'title',
    	'description',
    	'published_at'
    ];

    public $dates = ['published_at', 'created_at', 'updated_at'];

    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', Carbon::now())->latest('published_at');
    }
}
