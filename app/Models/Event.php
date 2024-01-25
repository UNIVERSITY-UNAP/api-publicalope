<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'category_id', 'start_date', 'end_date', 'organizer_id', 'capacity', 'status'];

    public $timestamps = false;
}
