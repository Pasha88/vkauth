<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = array(
            array(
                'name' => 'pashukmint@gmail.com',
                'password' => Hash::make('123123'),
                'email' => 'pashukmint@gmail.com'
            )
        );

        DB::table('users')->insert($users);
    }
}
