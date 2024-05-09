<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Config;

class UnDeploy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:un-deploy';

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
                // APP_DEBUG=true

                $this->call('optimize:clear');
        
                $this->call('config:clear');
        
                $this->call('event:clear');
        
                $this->call('route:clear');
        
                $this->call('view:clear');
        
    }
}
