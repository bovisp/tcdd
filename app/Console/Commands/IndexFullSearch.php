<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use TeamTNT\TNTSearch\TNTSearch;

class IndexFullSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'index:full';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index models for full site search';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $tnt = new TNTSearch;
      $tnt->loadConfig([
        "storage"   => storage_path(),
        "driver"    => 'mysql',
        "host" => '127.0.0.1',
        "database" => 'tcdd-api',
        "username" => 'root',
        "password" => ''
      ]);

      $indexer = $tnt->createIndex('fullsearch.index');

      $indexer->query('SELECT concat(\'course_\',id) as id, title, description, objectives, keywords, topics FROM courses;');

      $indexer->run();

      $indexer->query('SELECT concat(\'keyword_\',id) as id, name FROM keywords;');

      $indexer->run();

      die();
    }
}
