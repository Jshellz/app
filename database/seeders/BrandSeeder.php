<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Add value in db
     * @return void
     */
    public function run()
    {
        DB::table('brand')->insert([
            'title' => 'Nike',
            'price' => '33.353',
            'quality' => '***',
        ]);
        DB::table('brand')->insert([
            'title' => 'New Balance',
            'price' => '44.444',
            'quality' => '****',
        ]);
        DB::table('brand')->insert([
            'title' => 'The North Face',
            'price' => '3.333',
            'quality' => '**',
        ]);
        DB::table('brand')->insert([
            'title' => 'Select',
            'price' => '10.399',
            'quality' => '*****',
        ]);
    }
}
