<?php

namespace Database\Seeders;

use App\Models\Store;
use App\Models\User;
use App\Models\WorkDay;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $workdays = [
            ["name" => "Jornada Completa"],
            ["name" => "Media Jornada"],
            ["name" => "Fines de Semana"],
        ];

        $stors = [
            ["name" => "Albatera"],
            ["name" => "Alicante"],
            ["name" => "Almansa"],
            ["name" => "Aspe"],
            ["name" => "Callosa"],
            ["name" => "Campello"],
            ["name" => "Castalla"],
            ["name" => "Crevillente"],
            ["name" => "Dolores"],
            ["name" => "Elda"],
            ["name" => "Fontana CC"],
            ["name" => "Ibi"],
            ["name" => "Monovar"],
            ["name" => "Muchamiel"],
            ["name" => "Novelda"],
            ["name" => "Onil"],
            ["name" => "Petrer"],
            ["name" => "Pinoso"],
            ["name" => "San Blas"],
            ["name" => "Villena"],
            ["name" => "Yecla"]
        ];

        // Crear los registros de jornadas laborales
        foreach ($workdays as $wd) {
            WorkDay::create($wd);
        }

        // Crear los registros de tiendas
        foreach ($stors as $store) {
            Store::create($store);  
        }

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
            'password' => 'admin1234$',
        ]);
    }
}
