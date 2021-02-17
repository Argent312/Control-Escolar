<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\artes::class, 
        Commands\ciencias::class, 
        Commands\civica::class, 
        Commands\edufisica::class, 
        Commands\geo::class, 
        Commands\historia::class, 
        Commands\ingles::class, 
        Commands\lengua::class, 
        Commands\mate::class, 
        Commands\tecno::class,
        Commands\totalalum::class,
        Commands\totalgrupo::class   

    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('artes:update')->weeklyOn(7,'8:00')->withoutOverlapping; 
        $schedule->command('ciencias:update')->weeklyOn(7,'8:30')->withoutOverlapping; 
        $schedule->command('civica:update')->weeklyOn(7,'9:00')->withoutOverlapping; 
        $schedule->command('edufisica:update')->weeklyOn(7,'9:30')->withoutOverlapping; 
        $schedule->command('geo:update')->weeklyOn(7,'10:00')->withoutOverlapping; 
        $schedule->command('historia:update')->weeklyOn(7,'10:30')->withoutOverlapping; 
        $schedule->command('ingles:update')->weeklyOn(7,'11:00')->withoutOverlapping; 
        $schedule->command('lengua:update')->weeklyOn(7,'11:30')->withoutOverlapping; 
        $schedule->command('mate:update')->weeklyOn(7,'12:00')->withoutOverlapping; 
        $schedule->command('tecno:update')->weeklyOn(7,'12:30')->withoutOverlapping;
        $schedule->command('totalescuela:update')->weeklyOn(7,'13:00')->withoutOverlapping;
        $schedule->command('totalgrupo:update')->weeklyOn(7,'13:30')->withoutOverlapping;

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
