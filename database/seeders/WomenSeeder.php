<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WomenSeeder extends Seeder
{
    /**
     * Add value in db
     * @return void
     */
    public function run()
    {
        DB::table('women_goods')->insert([
            'name' => 'Худи Nike W Sportswear Club Fleece Hoodie DQ5775-063',
            'price' => '8 199 rub',
        ]);
        DB::table('women_goods')->insert([
            'name' => 'Куртка The North Face W Osito Jacket T93XBDJK3',
            'price' => '9 832 rub',
        ]);
        DB::table('women_goods')->insert([
            'name' => 'Кроссовки New Balance 574 IV574HO1',
            'price' => '7 305 rub',
        ]);
    }

}
