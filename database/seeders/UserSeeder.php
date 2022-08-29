<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //

        User::create([
            'name' => 'Jemish',
            'email' => 'jemish268@gmail.com',
            'password' => Hash::make('qwer1234'),
        ]);

        Contact::create([
            'user_id' => 1 ,
            'phone_no' => '9512183895',
            'address' => '123 Main Street',
        ]);

    }
}
