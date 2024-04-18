<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class tableName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = ' tableName';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'show table name';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tables = DB::connection()->tableName();
    }
}
