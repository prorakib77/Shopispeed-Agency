<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    protected $fillable = [
        'plane_duration',
        'username',
        'plane_email',
        'plane_phone',
        'plane_website',
        'plane_type',
        'plane_key',
        'plane_details',
    ];
}
