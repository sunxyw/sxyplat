<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
        $this->call('migrate:fresh', [
            '--force' => true,
        ]);

        $this->call('tenant:fresh', [
            '--include-missing' => true,
        ]);

        return 0;
    }
}
