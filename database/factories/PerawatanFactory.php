<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Karyawan;
use App\Models\Layanan;
use App\Models\Pelanggan;
use App\Models\Perawatan;

class PerawatanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Perawatan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'id_pelanggan' => Pelanggan::factory()->create()->id_pelanggan,
            'id_layanan' => Layanan::factory()->create()->id_layanan,
            'id_karyawan' => Karyawan::factory()->create()->id_karyawan,
            'tanggal_perawatan' => $this->faker->date(),
            'jam_perawatan' => $this->faker->time(),
            'catatan' => $this->faker->text(),
            'biaya_perawatan' => $this->faker->randomFloat(2, 0, 999999.99),
        ];
    }
}
