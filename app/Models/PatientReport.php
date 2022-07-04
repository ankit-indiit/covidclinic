<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

class PatientReport extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
    	'id',
        'patient_id',
    	'title',
    	'specimen_type',
    	'status',
    	'report',
    	'reg_date',
    ];

    // protected $appends = ['report_incurrect_status'];

    public function modelFilter()
    {
        return $this->provideFilter(\App\ModelFilters\PatientReportFilter::class);
    }

    public function getReportAttribute()
    {
    	return url('images/patient-reports/').'/'.$this->attributes['report'];
    }   

    public function getCreatedAtAttribute()
    {
        return date('d/m/Y H:i A', strtotime($this->attributes['created_at']));
    }
    
    public function getRegDateAttribute()
    {
        return date('d/m/Y H:i A', strtotime($this->attributes['reg_date']));
    }
}
