<?php

namespace App\Console\Commands\PerformanceData;

use Illuminate\Console\Command;

class DeleteOldPendingPeriods extends Command
{
    protected $signature = 'periods:cleanup-unconfirmed';
    protected $description = 'Cleanup old unconfirmed Periods';
    protected $days = 0;

    public function handle()
    {
        #todo maintance mode + delete
    }
}
