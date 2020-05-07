<?php

use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priorities')->insert([
            ['sort' => 100, 'name' => 'Low', 'slug' => 'Low', 'created_at' => now()],
            ['sort' => 200, 'name' => 'Normal', 'slug' => 'Normal', 'created_at' => now()],
            ['sort' => 300, 'name' => 'High', 'slug' => 'High', 'created_at' => now()],
            ['sort' => 500, 'name' => 'Immediate', 'slug' => 'Immediate', 'created_at' => now()],
        ]);
    }
}
