<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['sort' => 100, 'name' => 'bug', 'slug' => 'bug', 'color' => 'danger', 'created_at' => now()],
            ['sort' => 200, 'name' => 'feature', 'slug' => 'feature', 'color' => 'success', 'created_at' => now()],
            ['sort' => 300, 'name' => 'documentation', 'slug' => 'documentation', 'color' => 'warning', 'created_at' => now()],
        ]);
    }
}
