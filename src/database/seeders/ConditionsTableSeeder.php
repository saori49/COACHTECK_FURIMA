<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'condition' => '新品',
        ];
        DB::table('conditions')->insert($param);

        $param = [
            'condition' => '良品',
        ];
        DB::table('conditions')->insert($param);

        $param = [
            'condition' => '中古',
        ];
        DB::table('conditions')->insert($param);

    }
}
