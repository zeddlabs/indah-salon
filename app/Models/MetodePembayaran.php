<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MetodePembayaran extends Model
{
    use HasFactory;

    protected $table = 'metode_pembayaran';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_rekening',
        'nama_metode',
        'jenis_metode',
    ];

    public function rekening(): BelongsTo
    {
        return $this->belongsTo(Rekening::class, 'id_rekening');
    }

    public function penjualan(): HasMany
    {
        return $this->hasMany(Penjualan::class);
    }
}
