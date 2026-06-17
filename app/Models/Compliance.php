<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compliance extends Model
{
    protected $fillable = [
    'control_code',
    'control_name',
    'owner',
    'status',
    'review_date',
];
}
