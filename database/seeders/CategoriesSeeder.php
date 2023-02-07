<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Add value in db
     * @return void
     */
    public function run()
    {
        DB::table('categories_goods')->insert([
            'shoes' => 'Кроссовки New Balance 574 IV574HO1',
            'clothes' => 'Бейсболка New Balance 6-Panel Curved Brim NB Classic Hat LAH91014-BK',
            'headdress' => 'Кроссовки New Balance 574 IV574HO1',
            'accessories' => 'Бутылка для воды 1 л Select Drinking Bottle 700806_001',
        ]);
        DB::table('categories_goods')->insert([
            'shoes' => 'Ботинки The North Face Hh Hike Ii Mid WP TA4PF6GSQ',
            'clothes' => 'Брюки New Balance Essentials Stacked Logo Sweatpants MP03558-BK',
            'headdress' => 'Худи Nike W Sportswear Club Fleece Hoodie DQ5775-063',
            'accessories' => 'Перчатки The North Face W MONTANA FUTURELIGHT ETIP GLOVE TA4SGQJK3',
        ]);
        DB::table('categories_goods')->insert([
            'shoes' => 'Ботинки The North Face Hh Hike Ii Mid WP TA4PF6GSQ',
            'clothes' => 'Худи Nike W Sportswear Club Fleece Hoodie DQ5775-063',
            'headdress' => 'Куртка The North Face W Osito Jacket T93XBDJK3',
            'accessories' => 'Перчатки The North Face W MONTANA FUTURELIGHT ETIP GLOVE TA4SGQJK3',
        ]);
    }
}
