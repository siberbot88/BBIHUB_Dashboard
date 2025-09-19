<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /** @use HasFactory<\Database\Factories\VehicleFactory> */
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'brand',
        'model',
        'year',
        'license_plate',
        'vehicle_image'
    ] ;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    
    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class);
    }

    public function serviceLogs()
    {
        return $this->hasMany(ServiceLog::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
