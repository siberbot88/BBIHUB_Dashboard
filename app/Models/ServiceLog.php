<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceLog extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceLogFactory> */
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'workshop_id',
        'service_date',
        'description',
        'total_cost',
        'receipt_image'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}
