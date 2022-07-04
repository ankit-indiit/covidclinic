<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
    	'title',
    	'description',
    ];

    protected $appends = ['desc'];

    public function getDescAttribute()
    {
        return unserialize($this->attributes['description']);
    }    
}
