<?php

namespace App\Console\Commands\PerformanceData;

use Illuminate\Console\Command;

class DeleteOldPeriods extends Command
{
    protected $signature = 'periods:cleanup-old';
    protected $description = 'Cleanup old Periods';
    protected $years = 3;

    public function handle()
    {
        #todo maintance mode + delete
    }
}
