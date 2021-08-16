<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'username'=>'Huy Ngo',
            'email'=>'huyngoit99@gmail.com',
            'sdt'=>'0856787657',
            'role_id'=>'1',
            'password'=>bcrypt('huyngo0972')
        ]);
    }
}
