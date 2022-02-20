<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'study',
            'created_at' => now()
        ];
        DB::table('todos')->insert($param);
        $param = [
            'content' => 'flower',
            'created_at' => now()
        ];
        DB::table('todos')->insert($param);
        $param = [
            'content' => 'juice',
            'created_at' => now()
        ];
        DB::table('todos')->insert($param);
    }
}
