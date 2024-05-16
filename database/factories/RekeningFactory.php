<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Rekening;

class RekeningFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rekening::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama_bank' => $this->faker->word(),
            'no_rekening' => $this->faker->word(),
            'atas_nama' => $this->faker->word(),
        ];
    }
}
