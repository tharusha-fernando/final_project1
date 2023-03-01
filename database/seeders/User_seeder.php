<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class User_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@suwasetha.com',
            'password' => Hash::make('12345678'),
        ]);
        $user->save();
        $user->attachRole('administrator');
        $user = User::create([
            'name' => 'admin2',
            'email' => 'admin2@suwasetha.com',
            'password' => Hash::make('87654321'),
        ]);
        $user->save();
        $user->attachRole('administrator');
        //
    }
}
