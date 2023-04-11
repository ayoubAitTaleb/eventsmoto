<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'club',
        'approved',
        'rider_id'
    ];
    
    public function rider(): BelongsTo
    {
        return $this->belongsTo(Rider::class, 'rider_id');
    }
}
