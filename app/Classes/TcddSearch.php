<?php

namespace App\Classes;

use TeamTNT\TNTSearch\TNTSearch;

class TcddSearch
{
  protected $index;

  protected $searchTerm;

  protected $tnt;

  public function __construct($index, $searchTerm)
  {
    $this->index = $index;

    $this->searchTerm = $searchTerm;

    $this->tnt = new TNTSearch;

    $this->init();
  }

  public function perform()
  {
    $results = $this->tnt->search($this->searchTerm, 500);

    return $this->processResults($results);
  }

  protected function init()
  {
    $this->tnt->loadConfig([
      "storage"   => storage_path(),
      "driver"    => 'filesystem',
    ]);

    $this->tnt->selectIndex("{$this->index}.index");

    $this->tnt->fuzziness = true;
  }

  protected function processResults($results)
  {
    $res = [];

    foreach ($results['ids'] as $result) {

      $arr = explode('_', $result);

      $fqClassName = "\\App\\" . ucwords($arr[0]);

      $model = new $fqClassName();

      $modelResource = "\\App\\Http\\Resources\\" . ucwords($arr[0]) . "Resource";

      $res[] = new $modelResource($model->find($arr[1]));
    }
    
    return $res;
  }
}