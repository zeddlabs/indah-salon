<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\Produk;

class DetailPenjualanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DetailPenjualan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'id_penjualan' => Penjualan::factory()->create()->id_penjualan,
            'id_produk' => Produk::factory()->create()->id_produk,
            'jumlah_produk' => $this->faker->numberBetween(-10000, 10000),
            'harga' => $this->faker->randomNumber(7)
        ];
    }
}
