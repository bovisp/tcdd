<?php

namespace App;

use App\Keyword;
use App\Subject;
use App\CometCourse;
use Laravel\Scout\Searchable;
use App\Filters\Course\CourseFilters;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\CometCourse\CometCourseFilters;

class Course extends Model
{   
  use Searchable;

  protected $fillable = [
    'title',
    'publish_date',
    'skill_level',
    'completion_time',
    'last_updated_on',
    'description',
    'objectives',
    'language_id',
    'module_id',
    'image_src',
    'english_module_id',
    'topics',
    'keywords'
  ];

  public function nonEnglishCourses()
  {
    return $this->hasMany(Course::class, 'english_module_id');
  }

  public function subjects()
  {
    return $this->morphToMany(Subject::class, 'subjectable');
  }

  public function keywords()
  {
    return $this->morphToMany(Keyword::class, 'keywordable');
  }

  public function scopeFilter(Builder $builder, $filters = [])
  {
    return (new CourseFilters(request()))->add($filters)->filter($builder);
  }

  public function toSearchableArray()
  {
    $array = $this->toArray();

    // Customize array...

    return $array;
  }
}
