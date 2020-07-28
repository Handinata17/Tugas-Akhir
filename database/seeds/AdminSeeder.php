<?php

use Illuminate\Database\Seeder;
use App\SuperAdmin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuperAdmin::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt(12345678)
        ]);
    }
}
