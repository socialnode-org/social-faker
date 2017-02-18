<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DevSeedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate fake data to consume the APIs';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('Checking existing users...');
        $count = \App\User::count();

        if($count < 50) {
            $this->info('Found less than 50 users, generating 50 new users');
            factory(\App\User::class,50)->create();
        } else {
            $this->info('Found 50 or more users, moving on..');
        }

        $this->info('Generating 500 fake status notices...');
        factory(\App\Notice::class, 500)->create();

    }
}
