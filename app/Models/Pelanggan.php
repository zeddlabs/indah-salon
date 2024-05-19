<?php

namespace App\Models;

use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pelanggan extends Authenticatable implements HasName
{
    use HasFactory;

    protected $table = 'pelanggan';

    public function getFilamentName(): string
    {
        return $this->nama;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'alamat',
        'no_telp',
        'email',
        'tanggal_lahir',
        'jenis_kelamin',
        'foto',
        'password',
    ];

    public function perawatan(): HasMany
    {
        return $this->hasMany(Perawatan::class);
    }

    public function penjualan(): HasMany
    {
        return $this->hasMany(Penjualan::class);
    }
}
