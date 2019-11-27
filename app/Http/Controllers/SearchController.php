<?php

namespace App\Http\Controllers;

use App\Classes\TcddSearch;

class SearchController extends Controller
{
    public function index()
    {
      return (new TcddSearch('fullsearch', request()->query('q')))
        ->perform();
    }

    protected function getFilters()
    {
      return [
        // 
      ];
    }
}
