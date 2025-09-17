<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceTypeFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'duration_days',
        'slots_added',
        'price'
    ] ;

    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class);
    }
}
