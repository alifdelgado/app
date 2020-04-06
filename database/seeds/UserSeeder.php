<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('secret'), 'created_at'    =>  date('Y-m-d H:i:s'), 'updated_at'    =>  date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('secret'), 'created_at'    =>  date('Y-m-d H:i:s'), 'updated_at'    =>  date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('secret'), 'created_at'    =>  date('Y-m-d H:i:s'), 'updated_at'    =>  date('Y-m-d H:i:s')]
        ]);
    }
}
