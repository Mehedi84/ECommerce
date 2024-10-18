<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = '12345678';
        $users = [
            [
                'code' => 'EC-10001',
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make($password),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        foreach ($users as $key => $user) {
            $user = User::create($user);
            $user->assignRole(1);
        }

        $users3 = [
            [
                'code' => 'EC-10002',
                'name' => 'Supervisor',
                'email' => 'supervisor@gmail.com',
                'password' => Hash::make($password),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];


        foreach ($users3 as $key => $user) {
            $user = User::create($user);
            $user->assignRole(2);
        }

        $users3 = [
            [
                'code' => 'EC-10003',
                'name' => 'Advisor',
                'email' => 'advisor@gmail.com',
                'password' => Hash::make($password),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];


        foreach ($users3 as $key => $user) {
            $user = User::create($user);
            $user->assignRole(3);
        }
    }
}