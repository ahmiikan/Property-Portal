<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class dbbackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $filename = "ecommerece";
//            "backup-" . Carbon::now()->format('Y-m-d') . ".gz";

        $command = "mysqldump -u " . env('DB_USERNAME') ." --password="
            . env('DB_PASSWORD') . " --host=" . env('DB_HOST') . " "
            . env('DB_DATABASE') . " > db_backup.sql";

        $returnVar = NULL;
        $output  = NULL;

        exec($command, $output, $returnVar);
        return 0;
    }
}
