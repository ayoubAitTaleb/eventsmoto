<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'avatar',
        'otp',
        'status'
    ];
    protected $primaryKey = 'id_user';
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

        public function club(): HasOne
        {
            return $this->hasOne(Club::class, 'id_user');
        }

        public function media(): HasOne
        {
            return $this->hasOne(Media::class, 'id_user');
        }

        public function rider(): HasOne
        {
            return $this->hasOne(Rider::class, 'id_user');
        }

        public function company(): HasOne
        {
            return $this->hasOne(Company::class, 'id_user');
        }

        public function posts(): HasMany
        {
            return $this->hasMany(Post::class, 'id_user');
        }

        public function events(): HasMany
        {
            return $this->hasMany(Event::class, 'id_user');
        }
        
        public function messages(): HasMany
        {
            return $this->hasMany(Message::class, 'id_user');
        }
}
