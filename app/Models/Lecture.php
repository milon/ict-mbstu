<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $table = 'lecture';

    protected $fillable = ['title', 'description', 'user_id', 'file_path'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function delete()
    {
        if(file_exists(public_path($this->file_path))){
            @unlink(public_path($this->file_path));
        }

        parent::delete();
    }

}
