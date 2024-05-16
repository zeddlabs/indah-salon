<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\KategoriLayanan;

class KategoriLayananFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = KategoriLayanan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama_kategori' => $this->faker->word(),
        ];
    }
}
