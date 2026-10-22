<?php

namespace App\Console;


use App\Jobs\JobCheckSubscription;
use App\Jobs\JobCheckUpgradePlan;
use App\Jobs\JobCkeckExpire;
use App\Jobs\JobDeleteAnnounceBanAccount;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {

        // $schedule->command('inspire')->hourly();
         $schedule->job(new JobCheckSubscription)->dailyAt('20:00');
        $schedule->job(new JobCheckUpgradePlan)->dailyAt('20:30');
        $schedule->job(new JobCkeckExpire)->dailyAt('20:40');
        $schedule->job(new JobDeleteAnnounceBanAccount)->dailyAt('21:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
