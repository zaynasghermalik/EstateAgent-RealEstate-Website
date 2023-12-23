<?php

namespace App\Models;
use App\Models\Plot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    public function plots()
    {
        return $this->hasMany(Plot::class);
    }

    public function houses()
    {
        return $this->hasMany(Plot::class);
    }
}
