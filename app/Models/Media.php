<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'admin_name',
        'media_name',
        'email',
        'password',
        'phone',
        'social_reason',
        'country',
        'city',
        'address',
        'description',
        'logo',
        'card_front',
        'card_back'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}
