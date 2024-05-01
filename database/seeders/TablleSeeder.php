<?php

namespace Database\Seeders;

use App\Models\tablle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TablleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tablle::insert( [
            [
                'name' => 'Table 1',
                'capacité' => 4,
                'emplacement' => 'Côté Fenêtre'
            ],
            [
                'name' => 'Table 2',
                'capacité' => 6,
                'emplacement' => 'Zone Centrale'
            ],
            [
                'name' => 'Table 3',
                'capacité' => 2,
                'emplacement' => 'Coin Tranquille'
            ],
            [
                'name' => 'Table 4',
                'capacité' => 5,
                'emplacement' => 'Vue sur Jardin'
            ],
            [
                'name' => 'Table 5',
                'capacité' => 8,
                'emplacement' => 'Espace Privé'
            ],
            [
                'name' => 'Table 6',
                'capacité' => 4,
                'emplacement' => 'Terrasse Extérieure'
            ],
            [
                'name' => 'Table 7',
                'capacité' => 6,
                'emplacement' => 'Espace Enfants'
            ],
            [
                'name' => 'Table 8',
                'capacité' => 8,
                'emplacement' => 'Salon Privé'
            ],
        ]);
    }
}
