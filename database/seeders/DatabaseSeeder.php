<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Marcos Vinícius',
        'email' => 'marcos@likepublicidade.com',
        'password' => bcrypt('marcos1234'),
        // 'level' => 1,
      ]);
    }
}
