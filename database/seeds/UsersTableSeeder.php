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
            'name' => 'didier',
            'email' => 'didier@1.fr',
            'role' => 'admin',
            'password' => bcrypt('admin'),
        ]);

        User::create([
            'name' => 'chantal',
            'email' => 'chantal@1.fr',
            'password' => bcrypt('user'),
        ]);
    }
}
    

