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
        User::create([
            'name'=>'ibrahim',
            'email'=>'ibrahim.ehr02@gmail.com',
            'password'=>bcrypt('1234567')
        ]);
    }
}
