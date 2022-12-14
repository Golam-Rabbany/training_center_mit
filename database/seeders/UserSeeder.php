<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"Admin",
            "email"=>"admin@gmail.com",
            "role"=>'0',
            "status"=>'0',
            "password"=>Hash::make("admin@gmail.com")
        ]);
    }
}
