<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Restaurant;
use App\Article;
use App\Message;
use App\Praise;
use App\Problem;
use App\Score;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::truncate();
         Restaurant::truncate();
         Article::truncate();
         Message::truncate();
         Praise::truncate();
         Problem::truncate();
         Score::truncate();

         $this->call(UserTableSeeder::class);
         $this->call(TestTableSeeder::class);
    }
}
