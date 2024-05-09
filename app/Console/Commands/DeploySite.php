<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Config;

class DeploySite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:deploy-site';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // APP_DEBUG=false

        $this->call('optimize');

        $this->call('config:cache');

        $this->call('event:cache');

        $this->call('route:cache');

        $this->call('view:cache');
    }
}
