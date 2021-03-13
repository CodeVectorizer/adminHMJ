<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('tb_users')->insert([
        //     'name' => 'admin',
        //     'username' => 'admin',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('admin'), 
        //     'foto_user' => 'admin'           
        // ]);
        DB::table('tb_users')->insert([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('user'), 
            'foto_user' => 'user',
            'role' => 'user'
        ]);
    }
}
