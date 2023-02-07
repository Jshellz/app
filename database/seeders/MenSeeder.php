<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenSeeder extends Seeder
{
    /**
     * Add value in db
     * @return void
     */
    public function run()
    {
        DB::table('men_goods')->insert([
            'name' => 'Перчатки The North Face W MONTANA FUTURELIGHT ETIP GLOVE TA4SGQJK3',
            'price' => '7 832 rub',
        ]);
        DB::table('men_goods')->insert([
            'name' => 'Ботинки The North Face Hh Hike Ii Mid WP TA4PF6GSQ',
            'price' => '13 912 rub',
        ]);
        DB::table('men_goods')->insert([
            'name' => 'Худи Nike W Sportswear Club Fleece Hoodie DQ5775-063',
            'price' => '8 199 rub',
        ]);
    }

}
