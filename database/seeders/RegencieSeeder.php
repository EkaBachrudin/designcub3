<?php

namespace Database\Seeders;

use App\Models\Regencie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegencieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Regencie::truncate();

        $csvFile = fopen(base_path("database/data/regencies.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                Regencie::create([
                    "id" => $data['0'],
                    "province_id" => $data['1'],
                    "name" => $data['2'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
