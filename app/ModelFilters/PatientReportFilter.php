<?php
namespace App\ModelFilters;
use EloquentFilter\ModelFilter;

class PatientReportFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function specimenType($specimenType)
    {        
        return $this->where('specimen_type', $specimenType);
    }

    public function startDate($date)
    {
        $startDate = \Carbon\Carbon::parse($date);
        return $this->whereDate('created_at', '>=', $startDate->format('Y-m-d'));
    }

    public function endDate($date)
    {
        $endDate = \Carbon\Carbon::parse($date);
        return $this->whereDate('created_at', '<=', $endDate->format('Y-m-d'));
    }
}