<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\MetodePembayaran;
use App\Models\Pelanggan;
use App\Models\Penjualan;

class PenjualanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penjualan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'id_pelanggan' => Pelanggan::factory()->create()->id_pelanggan,
            'id_metode_pembayaran' => MetodePembayaran::factory()->create()->id_metode_pembayaran,
            'invoice' => $this->faker->word(),
            'tanggal_pesanan' => $this->faker->date(),
            'total_biaya' => $this->faker->randomNumber(8),
            'status_pesanan' => $this->faker->randomElement(["Menunggu"]),
            'status_pembayaran' => $this->faker->randomElement(["Belum"]),
            'bukti_pembayaran' => $this->faker->word(),
        ];
    }
}
