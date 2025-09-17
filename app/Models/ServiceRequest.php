<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceRequestFactory> */
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'workshop_id',
        'vehicle_id',
        'service_type_id',
        'scheduled_date',
        'status',
        'technician_id',
        'payment_status'
    ] ;

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }

    public function technician()
    {
        return $this->belongsTo(User::class, 'technician_id');
    }

    public function serviceLog()
    {
        return $this->hasOne(ServiceLog::class);
    }
}
