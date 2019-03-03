<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app('db')->statement("SET FOREIGN_KEY_CHECKS=0;");

        $this->call('UsersTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('ArticlesTableSeeder');
        $this->call('ArticleCategoryTableSeeder');

        app('db')->statement("SET FOREIGN_KEY_CHECKS=1;");
    }
}
