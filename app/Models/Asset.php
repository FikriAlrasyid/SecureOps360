<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
    'asset_code',
    'asset_name',
    'category',
    'owner',
    'location',
    'status',
    'purchase_date',
];
}
