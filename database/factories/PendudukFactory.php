<?php

namespace Database\Factories;

use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendudukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penduduk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'keluarga_id'=>1,
            'nama'=>$this->faker->firstName,
            'nik'=>$this->faker->randomNumber,
            'tempat_lahir'=>$this->faker->word,
            'tanggal_lahir'=>$this->faker->date($format = 'Y-m-d H:i:s'),
            'agama'=>$this->faker->randomElement(['islam', 'kristen','hindu']),
            'jenis_kelamin'=>$this->faker->randomElement(['Pria','Wanita']),
            'level_pendidikan_id'=>1,
            'pekerjaan_id'=>1,
            'status_pernikahan'=>$this->faker->randomElement(['Belum Menikah','Menikah','janda/duda']),
            'status_keluarga'=>$this->faker->randomElement(['Ayah','Ibu','Anak','Orang Tua']),
            'kewarganegaraan_id'=>1,
            'ayah'=>$this->faker->firstName,
            'ibu'=>$this->faker->firstName
        ];
    }
}
