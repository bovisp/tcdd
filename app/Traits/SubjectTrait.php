<?php

namespace App\Traits;

use App\Subject;
use Illuminate\Support\Str;

trait SubjectTrait
{
  protected function storeSubjects($subjects, $model)
  {
    if (!$subjects) return;

    foreach($subjects as $subject) {
      $subject = Subject::firstOrCreate(
        ['slug' => Str::slug($subject)],
        [
          'name' => $subject,
          'slug' => Str::slug($subject)
        ]
      );

      $this->addToSubjectablesTable($subject, $model);
    }

    return;
  }

  protected function addToSubjectablesTable($subject, $model)
  {
    $model->subjects()->save($subject);
  }
}