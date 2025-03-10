<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory()->count(3)->create();

        Job::factory(20)->create()->each(function ($job) use ($tags) {
            $job->tags()->attach($tags->pluck('id')->toArray());
        });
}

}