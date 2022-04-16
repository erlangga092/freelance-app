<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
                "name" => "admin",
                "email" => "admin@gmail.com",
                "password" => Hash::make("pakanmanuk13"),
                "remember_token" => null,
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "name" => "bunga",
                "email" => "bunga@gmail.com",
                "password" => Hash::make("pakanmanuk13"),
                "remember_token" => null,
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ]
        ];

        User::insert($users);
    }
}
