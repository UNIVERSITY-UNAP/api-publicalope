<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'username', 'first_name', 'last_name', 'email', 'password', 'role_id', ];

    public $timestamps = false;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    //     'password' => 'hashed',
    // ];


    // public function role()
    // {
    //     return $this->belongsTo(Role::class);
    // }

    // // Relación con Organizer (Usuario puede ser un Organizador)
    // public function organizer()
    // {
    //     return $this->hasOne(Organizer::class);
    // }

    // // Relación con UserSession (Usuario puede tener varias sesiones)
    // public function userSessions()
    // {
    //     return $this->hasMany(UserSession::class);
    // }

    // // Relación con Registration (Usuario puede tener varias inscripciones)
    // public function registrations()
    // {
    //     return $this->hasMany(Registration::class);
    // }
}
