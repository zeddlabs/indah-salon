<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function metodePembayaran(): BelongsTo
    {
        return $this->belongsTo(MetodePembayaran::class);
    }

    public function produk(): BelongsToMany
    {
        return $this->belongsToMany(Produk::class, 'detail_penjualan', 'id_penjualan', 'id_produk');
    }
}
