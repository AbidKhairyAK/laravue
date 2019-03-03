<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 20; $i++) { 
        	$data[$i] = [
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'password' => app('hash')->make('asdqwe123'),
                'created_at' => date('Y-m-d', time()),
                'updated_at' => date('Y-m-d', time()),
            ];
        }

        app('db')->table('users')->truncate();
        app('db')->table('users')->insert($data);
    }
}
