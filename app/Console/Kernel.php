<?php

namespace App\Console;
use App\Place;
use App\Debt;
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
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $places = Place::all();
            foreach ($places as $place) {
                if($place->minutes > -1) {
                    $place->minutes -= 1;
                    $place->save();
                }

                if($place->minutes == 0) {
                    Debt::create([
                        'number' => $place->number,
                        'user_id' => $place->user_id,
                        'place_id' => $place->id
                    ]);
                }

            }
        })->everyMinute();
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
