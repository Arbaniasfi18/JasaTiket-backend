<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name" => "Arbani",
                "email" => "arbani@gmail.com",
                "phone_num" => "08116790801",
                "password" => "arbani",
            ],
            [
                "name" => "daud",
                "email" => "daud@gmail.com",
                "phone_num" => "08116790801",
                "password" => "daud",
            ],
        ];
        DB::table('users')->insert($data);
        // User::create($data);
    }
}
