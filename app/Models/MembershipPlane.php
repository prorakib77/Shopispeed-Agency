<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipPlane extends Model
{
    use HasFactory;
    protected $fillable = [
        'plane_name',
        'plane_price',
        'plane_discount',
        'plane_description',
    ];

    public function getRouteKey()
    {
        return 'plane_name';
    }
}