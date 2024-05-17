<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rekening extends Model
{
    use HasFactory;

    protected $table = 'rekening';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_bank',
        'no_rekening',
        'atas_nama',
    ];

    public function metodePembayaran(): HasMany
    {
        return $this->hasMany(MetodePembayaran::class);
    }
}
