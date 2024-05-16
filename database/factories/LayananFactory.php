<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\KategoriLayanan;
use App\Models\Layanan;

class LayananFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Layanan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'id_kategori_layanan' => KategoriLayanan::factory()->create()->id_kategori_layanan,
            'nama_layanan' => $this->faker->word(),
            'deskripsi' => $this->faker->text(),
            'harga' => $this->faker->randomFloat(2, 0, 999999.99),
            'durasi' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
