<?php

use Illuminate\Database\Seeder;
use App\User as UserEloquent;
use App\Restaurant as RestaurantEloquent;
use App\Article as ArticleEloquent;
use App\Message as MessageEloquent;
use App\Praise as PraiseEloquent;
use App\Problem as ProblemEloquent;
use App\Score as ScoreEloquent;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(UserEloquent::class, 20)->create();
        $restaurants = factory(RestaurantEloquent::class, 20)->create();
        $articles = factory(ArticleEloquent::class, 300)->create()->each(function ($article) use ($restaurants, $users) {
            $article->res_id = $restaurants[mt_rand(0, (count($restaurants) - 1))]->id;
            $article->stu_id = $users[mt_rand(1, (count($users) - 1))]->id;
            $article->save();
        });
        $messages = factory(MessageEloquent::class, 20)->create()->each(function ($message) use ($articles, $users) {
            $message->art_id = $articles[mt_rand(0, (count($articles) - 1))]->id;
            $message->stu_id = $users[mt_rand(1, (count($users) - 1))]->id;
            $message->save();
        });
        $praises = factory(PraiseEloquent::class, 20)->create()->each(function ($praise) use ($articles, $users) {
            $praise->art_id = $articles[mt_rand(0, (count($articles) - 1))]->id;
            $praise->stu_id = $users[mt_rand(1, (count($users) - 1))]->id;
            $praise->save();
        });
        $problems = factory(ProblemEloquent::class, 20)->create()->each(function ($problem) use ($users) {
            $problem->stu_id = $users[mt_rand(1, (count($users) - 1))]->id;
            $problem->save();
        });
        $scores = factory(ScoreEloquent::class, 20)->create()->each(function ($score) use ($restaurants, $users) {
            $score->res_id = $restaurants[mt_rand(0, (count($restaurants) - 1))]->id;
            $score->stu_id = $users[mt_rand(1, (count($users) - 1))]->id;
            $score->save();
        });
    }
}
