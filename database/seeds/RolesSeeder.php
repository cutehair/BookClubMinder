<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['id' => '1', 'role' => 'admin'],
            ['id' => '2', 'role' => 'leader'],
            ['id' => '3', 'role' => 'co_leader'],
            ['id' => '4', 'role' => 'member']
        ]);
    }
}
