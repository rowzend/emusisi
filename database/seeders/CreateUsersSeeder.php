<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
               'name'=>'Pengguna',
               'email'=>'user@user.com',
               'type'=>0,
               'password'=> bcrypt('user'),
            ],
            [
               'name'=>'GrandMaster',
               'email'=>'grandmaster@admin.com',
               'type'=>1,
               'password'=> bcrypt('grandmaster'),
            ],
            [
               'name'=>'Admin',
               'email'=>'admin@admin.com',
               'type'=> 2,
               'password'=> bcrypt('admin'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
