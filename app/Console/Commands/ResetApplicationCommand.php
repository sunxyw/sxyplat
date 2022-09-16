<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class ResetApplicationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset the application, fresh migrations and tenants.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Cache::flush();

        $this->call('tenant:fresh', [
            '--include-missing' => true,
        ]);

        $this->call('migrate:fresh', [
            '--force' => true,
        ]);

        return 0;
    }
}
