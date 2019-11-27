<?php

namespace App\Traits;

use App\Keyword;
use Illuminate\Support\Str;

trait KeywordTrait
{
  protected function storeKeywords($keywords, $model)
  {
    if (!$keywords) return;

    foreach($keywords as $keyword) {
      $keyword = Keyword::firstOrCreate(
        ['slug' => Str::slug($keyword)],
        [
          'name' => $keyword,
          'slug' => Str::slug($keyword)
        ]
      );

      $this->addToKeywordablesTable($keyword, $model);
    }

    return;
  }

  protected function addToKeywordablesTable($keyword, $model)
  {
    $model->keywords()->save($keyword);
  }
}