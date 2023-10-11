<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('admin123')
            ],

            [
                'email'=>'guru@gmail.com',
                'role'=>'guru',
                'password'=>bcrypt('guru123')
            ],

            [
                'email'=>'543221002@smktelkom-bjb-sch.id',
                'role'=>'siswa',
                'password'=>bcrypt('siswa123')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
