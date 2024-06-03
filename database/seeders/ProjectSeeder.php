<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $project = new Project();

            $title = $faker->sentence(4);

            $project->title = $title;
            $project->slug = Str::slug($title);
            $project->description = $faker->paragraph(5);
            $project->budget = $faker->numberBetween(20000, 1000);
            $project->client = $faker->company();
            $project->due_date = $faker->dateTimeBetween('now', '+10 years');

            $project->save();
        }
    }
}
