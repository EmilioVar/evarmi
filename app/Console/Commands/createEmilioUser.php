<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class createEmilioUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:create-emilio-user';

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
        User::create([
            'name' => 'Emilio',
            'email' => 'emiliovm@outlook.es',
            'password' => bcrypt('Evulik2013')
        ]);

        $this->info('User created');
    }
}
