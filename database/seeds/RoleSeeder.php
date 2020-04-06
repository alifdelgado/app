<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['key' => 'admin', 'name' => 'Administrador', 'description' => 'This is the admin profile', 'created_at'    =>  date('Y-m-d H:i:s'), 'updated_at'    =>  date('Y-m-d H:i:s')],
            ['key' => 'mod', 'name' => 'Moderador', 'description' => 'This is the mod profile', 'created_at'    =>  date('Y-m-d H:i:s'), 'updated_at'    =>  date('Y-m-d H:i:s')],
            ['key' => 'student', 'name' => 'Student', 'description' => 'This is the student profile', 'created_at'    =>  date('Y-m-d H:i:s'), 'updated_at'    =>  date('Y-m-d H:i:s')]
        ]);
    }
}
