<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        
        $admin = User::create([
            'name' => 'Admin Account',

            'first_name' => 'Admin',
            'last_name' => 'Account',
            'phone' => '0702983211',
            'country' => 'UK',
            'approved' => 1,

            'email' => 'support@tradnationltd.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'acct_type' => 'admin_type',
            'pass' => 'password',
        ]);
        $admin->attachRole('admin');
        
        $user = User::create([
            'name' => 'Test Account',

            'first_name' => 'Test',
            'last_name' => 'Account',
            'phone' => '0702983211',
            'country' => 'UK',
            'approved' => 1,

            'email' => 'official247@gmail.com',
            'password' => '$2a$12$ANiaiC9X/mcZdiLxhhw0WOThAHJRE1wrq6Xoxj3NUGHrmXtJxKbiq', // 11111111
            'acct_type' => 1,
            'pass' => 11111111,
        ]);
        $user->attachRole('user');
        
        $this->call(CountriesTableSeeder::class);
        $this->call(AssetTableSeeder::class);
    }
}
