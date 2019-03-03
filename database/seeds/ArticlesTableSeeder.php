<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $users = app('db')->table('users')->pluck('id');

        for ($i=0; $i < 100; $i++) {
        	$title = $faker->sentence(3);

        	$data[$i] = [
        		'user_id' => $faker->randomElement($users),
                'title' => $title,
                'slug' => str_slug($title),
                'content' => $faker->paragraphs(4, true),
                'created_at' => date('Y-m-d', time()),
                'updated_at' => date('Y-m-d', time()),
            ];
        }
                
        app('db')->table('articles')->truncate();
        app('db')->table('articles')->insert($data);
    }
}
