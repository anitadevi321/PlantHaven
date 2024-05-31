<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\admin_login;
use App\Models\Auth;
use Illuminate\Support\Facades\Hash;

class admin_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password= "techno321";
        admin_login::create([
            "email" => "technoarray@gmail.com",
            'password' => Hash::make($password),
            "phone" => 8264930805,
            "otp" => 123456
        ]);
    }
}
