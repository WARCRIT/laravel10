<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now (),
            'phone' => '6289501708054',
            'bio' => 'mahasiswa',
            'role' => 'admin',
            'password' => Hash::make('12341234'),
        ]);

         User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now (),
            'phone' => '6289501708054',
            'bio' => 'mahasiswa',
            'role' => 'superadmin',
            'password' => Hash::make('12341234'),
        ]);
    }
}
