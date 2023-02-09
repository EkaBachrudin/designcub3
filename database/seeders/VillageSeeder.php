<?php

namespace Database\Seeders;

use App\Models\Village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Village::truncate();

        $csvFile = fopen(base_path("database/data/villages.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                Village::create([
                    "id" => $data['0'],
                    "district_id" => $data['1'],
                    "name" => $data['2']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
