<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory as FactoriesHasFactory;
use Illuminate\Database\Eloquent\Model;


class City extends Model
{
    use FactoriesHasFactory;

    protected $fillable = [
        "image",
        "name",
        "slug",
    ];
}
