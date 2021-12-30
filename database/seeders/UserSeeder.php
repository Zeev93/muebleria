<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        User::insert([
            'name' => 'Abraham',
            'apellido_p' => 'Alvarado',
            'apellido_m' => 'Guevara',
            'telefono' => '4423433144',
            'email' => 'abrahamag93@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('abraham'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
