<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $data = [
        //     ["role" => "Admin"],
        //     ["role" => "User"],
        // ];
        DB::table('roles')->insert([
            ['role' => "User",],
            ['role' => "Admin",],
        ]);
        // Role::create($data);
    }
}
