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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pelanggan',
        'id_metode_pembayaran',
        'invoice',
        'tanggal_pesanan',
        'total_biaya',
        'status_pesanan',
        'status_pembayaran',
        'bukti_pembayaran',
    ];

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
        return $this->belongsToMany(Produk::class, 'detail_penjualan', 'id_penjualan', 'id_produk')->withPivot('jumlah_produk', 'harga');
    }
}
