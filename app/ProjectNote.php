<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectNote extends Model
{
    protected $fillable = [
    	'body',
    	'project_id'
    ];

    public function project()
    {
    	$this->belongsTo(Project::class);
    }
}
