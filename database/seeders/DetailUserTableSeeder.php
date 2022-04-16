<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_user = [
            [
                "users_id" => "1",
                "photo" => "",
                "role" => "Web Developer",
                "contact_number" => "",
                "biography" => "",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ],
            [
                "users_id" => "2",
                "photo" => "admin@gmail.com",
                "role" => "Mobile Developer",
                "contact_number" => "",
                "biography" => "",
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s"),
            ]
        ];

        DetailUser::insert($detail_user);
    }
}