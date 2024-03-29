<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSession extends Model
{
    use HasFactory;

    protected $table = 'usersession';


    protected $fillable = ['user_id', 'status_id'];

    public $timestamps = false;
}
