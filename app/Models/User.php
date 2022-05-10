<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'facility',
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'role',
        'phone_number',
        'dob',
        'gender',
        'mrn',
        'city',
        'state',
        'zip_code',
        'address1',
        'address2',
        'ethnicity',
        'payment_status',
        'passport',
        'custom_info',
        'pregnancy',
        'race',
        'symptom',
        'image',
        'clinic_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['fake_image', 'clinic'];

    public function getImageAttribute()
    {
        return $this->attributes['image'] == NULL ? "https://ui-avatars.com/api/?name=".@$this->attributes['first_name']."&length=1" : url('/images/user').'/'.$this->attributes['image'];
    }

    public function getFakeImageAttribute()
    {
        return $this->attributes['image'];
    }

    public function getSymptomAttribute()
    {
        return unserialize($this->attributes['symptom']);
    }

    public function getClinicAttribute()
    {
        return @User::where('id', $this->attributes['clinic_id'])->pluck('facility')->first();
    }

    // public function getDobAttribute()
    // {
    //     return date('d/m/Y', strtotime($this->attributes['dob']));
    // }

    public function getCreatedAtAttribute()
    {
        return date('d/m/Y H:i A', strtotime($this->attributes['created_at']));
    }
}
