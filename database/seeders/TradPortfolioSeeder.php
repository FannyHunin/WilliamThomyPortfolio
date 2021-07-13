<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TradPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trad_portfolios')->insert([
            'imgSrc' => 'images/digital0.jpg',
            'title' => 'test 1',
            'descr' => 'test 1'
        ]);
        DB::table('trad_portfolios')->insert([
            'imgSrc' => 'images/digital0-1.jpg',
            'title' => 'test 2',
            'descr' => 'test 2'
        ]);
        DB::table('trad_portfolios')->insert([
            'imgSrc' => 'images/digital0-2.jpg',
            'title' => 'test 3',
            'descr' => 'test 3'
        ]);
        DB::table('trad_portfolios')->insert([
            'imgSrc' => 'images/digital0.jpg',
            'title' => 'test 4',
            'descr' => 'test 4'
        ]);
        DB::table('trad_portfolios')->insert([
            'imgSrc' => 'images/digital0.jpg',
            'title' => 'test 1',
            'descr' => 'test 1'
        ]);
        DB::table('trad_portfolios')->insert([
            'imgSrc' => 'images/digital0-1.jpg',
            'title' => 'test 2',
            'descr' => 'test 2'
        ]);
        DB::table('trad_portfolios')->insert([
            'imgSrc' => 'images/digital0-2.jpg',
            'title' => 'test 3',
            'descr' => 'test 3'
        ]);
        DB::table('trad_portfolios')->insert([
            'imgSrc' => 'images/digital0.jpg',
            'title' => 'test 4',
            'descr' => 'test 4'
        ]);
    }
}
