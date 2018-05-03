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
        App\User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => app('hash')->make('secret'),
        ]);

        $users = factory(App\User::class, 10)->create();
    }
}
