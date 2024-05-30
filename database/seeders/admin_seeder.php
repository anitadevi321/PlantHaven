<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\admin_login;
use App\Models\Auth;
class admin_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        admin_login::create([
            "email" => "technoarray@gmail.com",
            "password" => "Tech@321",
            "otp" => 123456
        ]);
    }
}
