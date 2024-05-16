<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rekening extends Model
{
    use HasFactory;

    public function metodePembayaran(): HasMany
    {
        return $this->hasMany(MetodePembayaran::class);
    }
}
