<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    protected $fillable = ['name', 'description', 'characteristics', 'achivments'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
