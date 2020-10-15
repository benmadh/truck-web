<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = 
        [
            'VOR2364301599804941719.jpg',
            'VOR2364301599804983128.jpg',
            'VOR2364301599805837898.jpg',
            'VOR2364301599805847475.jpg',
            'VOR2364301599805857636.jpg'
        ];

        $images_01 = 
        [
            'IMG_20200929_140855.jpg',
            'IMG_20200929_140843.jpg',
            'IMG_20200929_140815.jpg',
            'IMG_20200929_140806.jpg',
            'IMG_20200929_140909.jpg',
            'IMG_20200929_140922.jpg',
            'IMG_20200929_140932.jpg',
            'IMG_20200929_140943.jpg',
            'IMG_20200929_141002.jpg'
        ];

        $images_02 = 
        [
            'VOR2394091582726604007.jpg',
            'VOR2394091582726537317.jpg',
            'VOR2394091582726680274.jpg',
            'VOR2394091582790612205.jpg',
            'VOR2394091582790851033.jpg',
            'VOR2394091582791444554.jpg'
        ];

        $images_03 = 
        [
            'IMG_20200929_135851.jpg',
            'IMG_20200929_135900.jpg',
            'IMG_20200929_135916.jpg',
            'IMG_20200929_135936.jpg',
            'IMG_20200929_135953.jpg',
            'IMG_20200929_140002.jpg',
            'IMG_20200929_140013.jpg',
            'IMG_20200929_140031.jpg',
            'IMG_20200929_140044.jpg'
        ];

        $images_04 = 
        [
            'VOR2654671600415779431.jpg',
            'VOR2654671600415788588.jpg',
            'VOR2654671600416083538.jpg',
            'VOR2654671600415464567.jpg',
            'VOR2654671600415528399.jpg'
        ];

        $specs = 
        [
            'Modello' => 'WF01XXTTG1DC45530',
            'Data della carta di circolazione' => '26.11.2013',
            'Chilometraggio' => '253616',
            'Posti' => '9',
            'Porte' => '4',
            'Carburante' => 'Gasolio',
            'Potenza(CV)' => '125',
            'Classe di emissione' => '5',
            'Emissione(g CO2/km)' => '168',
            'Velocita' => '6',
            'Scatola del cambio' => 'MECANIQUE',
        ];

        $specs_01 = 
        [
            'Iveco Eurocargo ' => '120e18',
            'Prima immatricolazione' => '07/2012',
            'Normativa antinquinamento' => 'Euro 5B',
            'Chilometri percorsi' => '250.840',
            'Sponda caricatrice retrattile' => 'Dhollandia',
            'des_01' => 'Veicolo già collaudato',
            'des' => 'Veicolo importato dalla Francia'
        ];

        $specs_02 = 
        [
            'Modello' => 'ZCFA1ED1402620551',
            'Data della carta di circolazione' => '26.05.2014',
            'Chilometraggio' => '212013',
            'Posti' => '2',
            'Porte' => '2',
            'Carburante' => 'Gasolio',
            'Potenza(CV)' => '182',
            'Classe di emissione' => '5',
            'Emissione(g CO2/km)' => '-',
            'Velocita' => '6',
            'Scatola del cambio' => 'ROBOTISeE',
            'Carrozzeria' => 'Fourgon'
        ];

        $specs_03 = 
        [
            'Prima immatricolazione' => "09/2013",
            'Normativa antinquinamento' => "Euro 5",
            'Chilometri percorsi' => "217.000",
            'Sponda caricatrice battente ' => "MBB Palfinger",
            'dec' => "Veicolo già collaudato",
            'dec_2' => "Veicolo importato dalla Francia"
        ];

        $specs_04 = 
        [
            'Modello' => 'WD89061351N746789',
            'Data della carta di circolazione' => '30.01.2018',
            'Chilometraggio' => '167325',
            'Posti' => '3',
            'Porte' => '3',
            'carburante' => 'Gasolio',
            'Potenza (CV)' => '143',
            'Classe di emissione' => '6',
            'Emissione (g CO2/Km)' => '204',
            'Velocita' => '7',
            'Scatola del cambio' => 'BV AUTOMATIQUE'
        ];

        DB::table('vehicles')->insert([
                [
                    'number' => "DA570TX",
                    'model_id' => 1,
                    'brand_id' => 1,
                    'type' => 'furgoni',
                    'images' => json_encode($images),
                    'specs'  => json_encode($specs)
                ],
                [
                    'number' => "CJ680GC",
                    'type' => 'furgoni',
                    'model_id' => 1,
                    'brand_id' => 1,
                    'images' => json_encode($images_01),
                    'specs'  => json_encode($specs_01)
                ],
                [
                    'number' => "DG882BW",
                    'model_id' => 2,
                    'brand_id' => 2,
                    'type' => 'camion',
                    'images' => json_encode($images_02),
                    'specs'  => json_encode($specs_02)
                ],  
                [
                    'number' => "CY932PL",
                    'model_id' => 3,
                    'brand_id' => 3,
                    'type' => 'furgoni',
                    'images' => json_encode($images_03),
                    'specs'  => json_encode($specs_03)
                ],   
                [
                    'number' => "ET403SB",
                    'model_id' => 4,
                    'brand_id' => 3,
                    'type' => 'furgoni',
                    'images' => json_encode($images_04),
                    'specs'  => json_encode($specs_04)
                ],   
        ]);
    }
}
