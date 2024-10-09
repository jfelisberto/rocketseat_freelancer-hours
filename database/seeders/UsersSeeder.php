<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'       => 'Admin',
            'email'      => 'admin@teste.com.br',
            'login'      => 'admin',
            'admin'      => 1,
            'active'     => 1,
            'password'   => Hash::make('admin@admin'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name'       => 'Juliano Felisberto',
            'email'      => 'juliano.felisberto@teste.com.br',
            'login'      => 'jfelisberto',
            'admin'      => 0,
            'active'     => 1,
            'password'   => Hash::make('jefweb@2024'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name'       => 'Juliano Naiuber',
            'email'      => 'juliano.naiuber@teste.com.br',
            'login'      => 'naiuber',
            'admin'      => 0,
            'active'     => 1,
            'password'   => Hash::make('jefweb@2024'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name'       => 'Leandor Felisberto',
            'email'      => 'leandor.eloi@teste.com.br',
            'login'      => 'naiuber',
            'admin'      => 0,
            'active'     => 1,
            'password'   => Hash::make('jefweb@2024'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
