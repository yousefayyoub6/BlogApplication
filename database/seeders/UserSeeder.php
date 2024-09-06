<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles =
            [
                [
                    "id" => 1,
                    "first_name" => "yousef",
                    "last_name" => "ayyoub",
                    "email" => "yousefayyoub6@gmail.com",
                    "password" => "123456789",
                    "role_id" => 1
                ],
            

            ];

        foreach ($roles as $key => $value) {
            User::create($value);
        }
    }
}
