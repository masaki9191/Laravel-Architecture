<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'type' => 0,
            'name' => 'admin',
            'userid' => 'admin',
            'password' => bcrypt('123456'),
            'realpassword' => '123456'
        ]);
    }
}
