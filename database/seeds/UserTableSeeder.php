<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'id_group' => '1',
            'username' => 'admin',
            'email' => 'admin@spam4.me',
            'password' => bcrypt('123456'),
            'fullname' => 'Admin Sistem',
            'status' => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        // \DB::statement("SELECT pg_catalog.setval(pg_get_serial_sequence('users', 'id'), ". "MAX(id)) FROM users");
    }
}
