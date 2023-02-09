<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::truncate();

        $csvFile = fopen(base_path("database/data/provinces.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                Province::create([
                    "id" => $data['0'],
                    "name" => $data['1']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
