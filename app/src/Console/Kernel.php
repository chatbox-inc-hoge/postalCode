<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/04/19
 * Time: 2:22
 */

namespace Chatbox\PostalCode\Console;

use Chatbox\Rumic\Console\Kernel as ConsoleKernel;
use Illuminate\Console\Scheduling\Schedule;

class Kernel extends ConsoleKernel{

    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        'Chatbox\PostalCode\Console\Commands\DebugImport'
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //
    }

}