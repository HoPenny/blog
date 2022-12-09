<?php

namespace Database\Seeders;

use App\Models\Article;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();
        $faker = Factory::create('zh_TW');
        // for ($i = 1; $i <= 50; $i++) {
        //     Article::create(['subject' => $faker->name(),
        //         'content' => $faker->company(),
        //         'cgy_id' => $faker->randomDigitNot(0),
        //         'enabled' => $faker->randomElement([true, false]),
        //         'pic' => 'storage\app\pic\1669795015.jpg']);
        // }
        Article::factory()->times(10)->create();

    }
}
