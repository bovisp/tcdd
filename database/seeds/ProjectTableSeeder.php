<?php

use App\Project;
use App\ProjectNote;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = factory(Project::class, 10)->create();

        foreach($projects as $project) {
        	$project->update([
        		'owner_id' => $project->id
        	]);

        	factory(ProjectNote::class, 10)->create([
	        	'project_id' => $project->id
	        ]);
        }
    }
}
