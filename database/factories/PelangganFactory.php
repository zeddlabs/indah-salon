<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Hash;

class PelangganFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pelanggan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->word(),
            'alamat' => $this->faker->text(),
            'no_telp' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'tanggal_lahir' => $this->faker->date(),
            'jenis_kelamin' => $this->faker->randomElement(["Laki-laki", "Perempuan"]),
            'password' => Hash::make('password'),
        ];
    }
}
