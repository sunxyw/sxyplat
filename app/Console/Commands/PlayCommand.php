<?php

namespace App\Console\Commands;

use App\Models\CentralUser;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Console\Command;

class PlayCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Play with the code';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $c_user = CentralUser::create([
            'name' => 'John Doe',
            'email' => 'john@localhost',
            'password' => 'password',
        ]);
        $tenant = Tenant::query()->create([
            'id' => 'john_empire'
        ]);

        $tenant->run(function () use ($c_user) {
            User::create([
                'global_id' => $c_user->global_id,
                'name' => 'John Doe',
                'email' => 'john@localhost',
                'password' => 'password',
            ]);
        });

//        $c_user->tenants()->attach($tenant);
    }
}
