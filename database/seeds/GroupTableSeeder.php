<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->delete();
        DB::table('groups')->insert([
            'id' => '1',
            'group_name' => 'Admin',
        ]);
        // \DB::statement("SELECT pg_catalog.setval(pg_get_serial_sequence('groups', 'id'), ". "MAX(id)) FROM groups");
    }
}
