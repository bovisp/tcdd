<?php

namespace App\Filters\Course;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class TopicFilter extends AbstractFilter
{
  public function mappings()
  {
    return [];
  }

  public function filter(Builder $builder, $value)
  {
    // There are no mappings for this filter. 
    // This is just to show what that implementation would look like.
    if ($this->mappings()) {
      $value = $this->resolveFilterValue($value);
    }    

    if ($value === null) return $builder;

    return $builder->where('topics', 'like', '%' . $value . '%');
  }
}