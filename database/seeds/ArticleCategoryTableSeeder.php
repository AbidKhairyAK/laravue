<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Model\Article;
use App\Model\Category;

class ArticleCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app('db')->table('article_category')->truncate();

        $faker = Faker::create();
        $articles = Article::all();
        $categories_id = Category::pluck('id');

        foreach ($articles as $article) {
        	for ($i=0; $i < rand(2,4); $i++) {
                $categories[$i] = $faker->randomElement($categories_id); 
            }
        	$article->categories()->sync($categories);
            unset($categories);
        }
    }
}
