<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Pengguna',
                'email' => 'user@user.com',
                'auth'  => 'user',
                'type' => 0,
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'GrandMaster',
                'email' => 'grandmaster@admin.com',
                'auth'  => 'super-admin',
                'type' => 1,
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'auth'  => 'admin',
                'type' => 2,
                'password' => Hash::make('12345678'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
