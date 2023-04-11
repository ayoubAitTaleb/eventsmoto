<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_name',
        'club_name',
        'email',
        'password',
        'phone',
        'country',
        'city',
        'address',
        'description',
        'logo',
        'rec_def'
    ];
    /**
     * Get the user that owns the Club
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
