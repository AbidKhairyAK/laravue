<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
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
                'name' => $faker->word,
                'created_at' => date('Y-m-d', time()),
                'updated_at' => date('Y-m-d', time()),
            ];
        }
                
        app('db')->table('categories')->truncate();
        app('db')->table('categories')->insert($data);
    }
}
