<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'name' => 'Didier',
            'email' => 'didier@chezlui.fr',
            'role' => 'admin',
            'password' => bcrypt('admin'),
        ]);

        User::create([
            'name' => 'Chantal',
            'email' => 'chantal@chezlui.fr',
            'password' => bcrypt('user'),
        ]);
    }
}
    

