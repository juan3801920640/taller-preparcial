<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::factory()->count(1)->create();

        DB::table('vehicle')->insert(
            [
                'vehicle_brand' => "Mercedez",
                'doors_number'=> 4,
                'model'=> now(),
                'color'=> "red",
                'cylinder_capacity_cc'=> 20,
                'horse_power'=> 24
            ]
            );
    }
}
