<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bus;
use App\Models\Rute;
use Faker\Factory as Faker;

class BusAndRuteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Data statis untuk rute utama wilayah Sumedang
        $daftarRute = [
            ['nama_rute' => 'Terminal Ciakar - Jatinangor', 'asal' => 'Terminal Ciakar', 'tujuan' => 'Jatinangor', 'tarif' => 5000],
            ['nama_rute' => 'Wado - Terminal Sumedang', 'asal' => 'Wado', 'tujuan' => 'Terminal Sumedang', 'tarif' => 7000],
            ['nama_rute' => 'Cimalaka - Tomo', 'asal' => 'Cimalaka', 'tujuan' => 'Tomo', 'tarif' => 6000],
            ['nama_rute' => 'Tanjungsari - Alun-alun Sumedang', 'asal' => 'Tanjungsari', 'tujuan' => 'Alun-alun Sumedang', 'tarif' => 5500],
            ['nama_rute' => 'Buahdua - Situraja', 'asal' => 'Buahdua', 'tujuan' => 'Situraja', 'tarif' => 8000],
        ];

        foreach ($daftarRute as $dataRute) {
            // Simpan rute ke database
            $rute = Rute::create($dataRute);

            // Untuk setiap rute, buat 3 bus dummy menggunakan Faker (total 15+ data bus)
            for ($i = 0; $i < 3; $i++) {
                Bus::create([
                    'rute_id' => $rute->id,
                    'nomor_plat' => strtoupper($faker->bothify('Z #### ???')), // Format plat nomor acak
                    'nama_bus' => 'Bus ' . $faker->company,                  // Nama bus acak
                    'kapasitas' => $faker->numberBetween(30, 45),            // Kapasitas acak 30-45
                ]);
            }
        }
    }
}
