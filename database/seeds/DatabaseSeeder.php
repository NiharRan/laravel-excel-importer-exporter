<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'Akash Das',
            'email' => 'akashdas@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 1
        ]);
        User::create([
            'name' => 'Nihar Ranjan Das',
            'email' => 'niharranjandas@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 2
        ]);
    }
}
