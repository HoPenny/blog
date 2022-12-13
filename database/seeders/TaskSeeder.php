<?php

namespace Database\Seeders;

use App\Models\Task;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::truncate();
        $faker = Factory::create('zh_TW');
        Task::factory()->times(100)->create();

    }
}