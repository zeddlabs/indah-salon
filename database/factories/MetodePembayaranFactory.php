<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\MetodePembayaran;
use App\Models\Rekening;

class MetodePembayaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MetodePembayaran::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'id_rekening' => Rekening::factory()->create()->id_rekening,
            'nama_metode' => $this->faker->word(),
            'rekening_id' => Rekening::factory(),
        ];
    }
}
