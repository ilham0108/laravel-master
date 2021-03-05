<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $gender = $faker->randomElement(['male', 'female']);

        foreach (range(1, 2000) as $index) {
            DB::table('pelanggan')->insert([
                'nama' => $faker->name($gender),
                'alamat' => $faker->address,
                'nik'    => $faker->randomNumber,
                'id_pelanggan'    => $faker->randomNumber,
                'id_paket' => "1"
            ]);
        }
    }
}
