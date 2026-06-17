<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    protected $fillable = [
    'risk_name',
    'description',
    'likelihood',
    'impact',
    'score',
    'mitigation',
    'status',
];
}
