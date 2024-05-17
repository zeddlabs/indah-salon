<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_layanan',
        'deskripsi',
        'harga',
        'durasi',
        'foto',
    ];

    public function perawatan(): HasMany
    {
        return $this->hasMany(Perawatan::class);
    }
}
