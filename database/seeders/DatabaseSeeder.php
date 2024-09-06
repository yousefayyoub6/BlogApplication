<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run(): void
    {
         Post::factory()->count(10)->create();
   
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
