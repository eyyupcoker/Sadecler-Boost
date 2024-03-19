<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BoostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('boosts')->insert(['currentLeague' => 'gold ', 'leagueDivision' => '1', 'leaguePoints' => '30', 'targetLeague' => 'diamond', 'targetLeagueDivision' => '2', 'price' => '0000', 'user_id' => '1']);
    }
}
