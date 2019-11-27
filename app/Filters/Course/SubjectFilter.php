<?php

namespace App\Filters\Course;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class SubjectFilter extends AbstractFilter
{
  public function filter(Builder $builder, $value)
  {
    return $builder->whereHas('subjects', function (Builder $builder) use ($value) {
      $builder->where('slug', $value);
    });
  }
}