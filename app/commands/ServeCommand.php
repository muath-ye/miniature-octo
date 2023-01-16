<?php

use Illuminate\Console\Command;

class ServeCommand extends Command
{
    protected $signature = 'serve';
    protected $description = 'This is a simple hello world';

    public function handle()
    {
        exec('php -S localhost:8000');
    }
}