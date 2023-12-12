<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_list = array(
            array(
                'lastname' => 'Foucault',
                'firstname' => 'Jean-Pierre',
                'email' => 'jeanpierrefoucault@mail.com',
                'phone' => '0123456789',
                'address' => '1 rue de l\'admin',
                'password' => bcrypt('password'),
            ),
            array(
                'lastname' => 'Dupont',
                'firstname' => 'Jean',
                'email' => 'jeandupont@mail.com',
                'phone' => '0123456789',
                'address' => '2 rue de l\'admin',
                'password' => bcrypt('password2'),
            ),
        );

        foreach ($user_list as $user) {
            User::create($user);
        }
    }
}
