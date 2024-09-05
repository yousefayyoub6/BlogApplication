<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run(): void
    {
        $roles =
            [
                [
                    "id" => 1,
                    "role" => "Admin",
                ],
                [
                    "id" => 2,
                    "role" => "User",
                ],

            ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}
