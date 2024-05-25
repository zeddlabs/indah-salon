<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'id_produk',
        'jumlah_produk',
        'total_biaya',
        'status_pesanan',
        'status_pembayaran',
        'bukti_pembayaran',
    ];

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function metode_pembayaran(): BelongsTo
    {
        return $this->belongsTo(MetodePembayaran::class, 'id_metode_pembayaran');
    }

    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
}
