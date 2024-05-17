<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Produk;

class ProdukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produk::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama_produk' => $this->faker->word(),
            'deskripsi' => $this->faker->text(),
            'harga' => $this->faker->randomNumber(7),
            'stok' => $this->faker->numberBetween(1, 100),
        ];
    }
}
