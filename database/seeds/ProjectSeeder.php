<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Project::class, 10)->create()->each(function ($project){
            $project->tasks()->createMany(factory(\App\Task::class, 3)->make()->toArray());

            $project->tasks()->each(function ($task) use ($project){
                $task->comments()->createMany(factory(\App\Comment::class, 3)->make()->toArray());
                $task->tags()->save(\App\Tag::inRandomOrder()->limit(3)->first());
                $project->members()->save($task->assignee);
            });

            $projectUsers = DB::table('project_user')->pluck('id');
            foreach ($projectUsers as $record) {
                DB::table('project_user')->where('id', $record)->update(['is_favorite' => random_int(0, 1)]);
            }
        });
    }
}
