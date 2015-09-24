<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->command->info('User table seeded!');

        Model::reguard();
    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Anthony Nandaa',
            'email' => 'prof@nandaa.com',
            'password' => bcrypt('12345')
        ];
        User::create($data);
    }
}
