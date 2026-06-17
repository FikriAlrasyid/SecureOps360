<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $fillable = [
    'ticket_number',
    'title',
    'description',
    'priority',
    'status',
    'reported_by',
    'incident_date',
];
}
