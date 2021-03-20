<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'usernew1@example.com',
            'mobile' => '9876543210',
            'user_id' => 'ASE000002',
            'temp_password' => Hash::make('12345678'),
            'password' => null,
        ]);
    }
}
