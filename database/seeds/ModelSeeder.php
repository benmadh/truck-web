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
            ],
            [
                'name' => "Eurocargo 120E18P EURC",
            ],
            [
                'name' => "Sprinter 513 CDI"
            ],
            [
                'name' => "Sprinter 314 CDI CC 3T5 E6"
            ]  
        ]);
    }
}
