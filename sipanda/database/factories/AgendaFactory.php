<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tanggal' => $this->faker->date(),
            'jam' => $this->faker->time(),
            'acara' => $this->faker->realText($maxNbChars = 20, $indexSize = 2),
            'tempat' => $this->faker->company(),
            'penyelenggara' => $this->faker->name(),
            'disposisi' => $this->faker->randomelement(['Super Admin', 'Admin', 'Kabid PPM','Kabid PPEPD','Kabid Litbang','Kabid PSI', 'Sekre','Kaban']),
            'kehadiran' => $this->faker->randomelement(['Mewakili', 'Hadir', 'Bersama Saya','Utus JFT','Utus Staf']),
            'keterangan' => $this->faker->text(20),
            'user_id' => $this->faker->randomDigit(3)
        ];
    }
}
