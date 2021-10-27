<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ArduinoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'arduino:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Arduino task executed successfully';

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
     * @return int
     */
    public function handle()
    {
        \Log::info("Arduino task execution");
        $this->info('Arduino task working fine');
        // return 0;
    }
}
