<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create ([
            'name'         => 'Ahmed Nabil',
            'email'        => 'ahmednassag@yahoo.com',
            'password'     => bcrypt('12345678'),
            'phone_number' => '01016856433',
        ]);
    }
}
