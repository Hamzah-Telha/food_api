<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'dumy:test';

    protected $description = 'Test command';

    public function handle()
    {
        dd(extension_loaded('mysql'));
    }

    public function add(int ... $nums)
    {

    }
}
