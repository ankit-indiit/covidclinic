<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NearestLocation extends Model
{
    use HasFactory;

    protected $fillable = [
    	'title',
    	'address',
    	'working_hour',
    	'mobile_no',
    	'image',
    	'link',
    ];

    protected $appends = ['fake_image'];

    public function getImageAttribute()
    {
    	return asset("/images/nearest-location").'/'.$this->attributes['image'];
    }

    public function getFakeImageAttribute()
    {
    	return $this->attributes['image'];
    }
}
