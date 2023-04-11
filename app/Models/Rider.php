<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rider extends Model
{
    use HasFactory;
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function member(): HasOne
    {
        return $this->hasOne(Member::class, 'rider_id')->withDefault(['club' => 'not defined']);
    }
}
