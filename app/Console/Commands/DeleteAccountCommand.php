<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class DeleteAccountCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It will auto delete any user account which has requested account deletion and havent loggedin for more than five days';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date = today()->format('Y-m-d');
        User::where('deletion_request','<',$date)->delete();
        return "All Accounts Deleted Successfully";
    }
}
