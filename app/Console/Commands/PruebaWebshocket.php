<?php

namespace App\Console\Commands;

use App\Events\FireConffeti;
use Illuminate\Console\Command;

class PruebaWebshocket extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:prueba-webshocket';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'probar envío de evento a webshocket';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        FireConffeti::dispatch();
    }
}
