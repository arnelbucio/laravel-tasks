<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::truncate();

        User::create([
            'username' => 'arnelbucio',
            'email'    => 'rnlbucio@gmail.com',
            'password' => '1234'
        ]);
        User::create([
            'username' => 'johndoe',
            'email'    => 'johndoe@example.com',
            'password' => '1234'
        ]);
	}

}
