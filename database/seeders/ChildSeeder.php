<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChildSeeder extends Seeder
{
    /**
     * Add value in db
     * @return void
     */
    public function run()
    {
        DB::table('child_goods')->insert([
            'name' => 'Бейсболка New Balance 6-Panel Curved Brim NB Classic Hat LAH91014-BK',
            'price' => '2 541 rub',
        ]);
        DB::table('child_goods')->insert([
            'name' => 'Брюки New Balance Essentials Stacked Logo Sweatpants MP03558-BK',
            'price' => '5 990 rub',
        ]);
        DB::table('child_goods')->insert([
            'name' => 'Бутылка для воды 1 л Select Drinking Bottle 700806_001',
            'price' => '711 rub',
        ]);
    }
}
