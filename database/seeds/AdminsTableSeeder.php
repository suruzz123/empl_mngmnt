<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
           'created_at' => \Carbon\Carbon::now(),
           'username' => 'suruz',
            'image' => '',
            'first_name' => 'suruz',
            'last_name' => 'zaman',
            'email' => 'admin@admin.com',
            'password' => bcrypt('11111111'),
            'status' => '1',
        ]);
    }
}
