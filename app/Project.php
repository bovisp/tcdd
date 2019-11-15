<?php

namespace App;

use App\User;
use App\ProjectNote;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
    	'name',
    	'description',
      'owner_id',
      'image'
    ];

    public function owner()
    {
    	return $this->belongsTo(User::class);
    }

    public function notes()
    {
    	return $this->hasMany(ProjectNote::class);
    }
}
