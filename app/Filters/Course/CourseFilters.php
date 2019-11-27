<?php

namespace App\Filters\Course;

use App\Filters\AbstractFilters;
use App\Filters\Course\{ TopicFilter, KeywordFilter, SubjectFilter };

class CourseFilters extends AbstractFilters
{
  protected $filters = [
    'topic' => TopicFilter::class,
    'keyword' => KeywordFilter::class,
    'subject' => SubjectFilter::class,
  ];
}