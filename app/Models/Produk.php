<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'stok',
        'foto',
    ];

    public function penjualan(): HasMany
    {
        return $this->hasMany(Penjualan::class);
    }
}
