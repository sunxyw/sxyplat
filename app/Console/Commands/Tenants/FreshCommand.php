<?php

namespace App\Console\Commands\Tenants;

use App\Models\Tenant;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class FreshCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:fresh {--include-missing : Include tenants that are missing from the central records}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop all tenants databases, and remove their record from the central database.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $tenants = Tenant::all();

        // Ask for confirmation
        if ($tenants->count()) {
            $this->comment('This will drop all tenants databases. Are you sure?');
            $this->comment(sprintf('Tenants(%d): %s', $tenants->count(), $tenants->implode('id', ', ')));
            if (!$this->confirm('Continue?')) {
                return 1;
            }

            $tenants->each(function ($tenant) {
                $this->info("Dropping database for tenant {$tenant->id}...");
                $tenant->delete();
                $this->info("Tenant {$tenant->id} has been removed from the central database.");
            });
        } else {
            $this->info('No tenants found.');
        }

        if ($this->option('include-missing')) {
            $this->info('Dropping missing tenants databases...');
            // Get all databases starting with the tenant prefix
            $databases = DB::select('SHOW DATABASES LIKE "' . config('tenancy.database.prefix') . '%"');
            $column_name = sprintf('Database (%s%%)', config('tenancy.database.prefix'));
            $databases = array_map(fn($database) => $database->{$column_name}, $databases);
            $this->comment('This will drop all tenants databases. Are you sure?');
            $this->comment('This may include databases that are not tenants databases.');
            $this->info(sprintf('Databases(%d): %s', count($databases), implode(', ', $databases)));
            if (!$this->confirm('Continue?')) {
                return 1;
            }
            foreach ($databases as $database) {
                $this->info("Dropping database {$database}...");
                DB::statement("DROP DATABASE IF EXISTS {$database}");
            }
        }

        return 0;
    }
}
