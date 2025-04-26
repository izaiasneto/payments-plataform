<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'payer',
        'payee',
        'value'
    ];

    public function payer(): BelongsTo
    {
        return $this->belongsTo(user::class, 'payer');
    }

    public function payee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'payee');
    }
}
