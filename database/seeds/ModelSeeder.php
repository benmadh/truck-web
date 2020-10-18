<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('models')->insert([
            [
                'name' => "Transit Custom Kombi TR",
                'brand' => 1,
            ],
            [
                'name' => "Eurocargo 120E18P EURC",
                'brand' => 1,
            ],
            [
                'name' => "Sprinter 513 CDI",
                'brand' => 2,
            ],
            [
                'name' => "Sprinter 314 CDI CC 3T5 E6",
                'brand' => 2,
            ]  
        ]);
    }
}
