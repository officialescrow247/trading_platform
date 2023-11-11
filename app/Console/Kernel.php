<?php

namespace App\Console;

use App\Models\Setting;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Carbon;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('close:trade')->everyMinute();
        $schedule->call(function () {
            $getTransactions = Transaction::where('status', 'ACTIVE')
                ->where('duration', '!=', NULL)
                ->latest()->get();
        
            foreach($getTransactions as $transaction){
                $date1 = Carbon::now()->addHour();
                $date2 = $transaction->duration;
                
                if ($date1->greaterThanOrEqualTo($date2)) {
                    $admin_data = [
                        'admin_email' => Setting::where('name', 'support_email')->value('value'),
                        'site_name' => env('APP_NAME'),
                        'user_name' => 'Admin',
                        'msg' => "It's time to close a Trade with this ID - #A" . date('Y') . $transaction->id
                    ];
    
                    Mail::send('mails.email_template2', $admin_data, function ($message) use ($admin_data) {
                        $message->from($admin_data['admin_email'], $admin_data['site_name']);
                        $message->to($admin_data['admin_email'], $admin_data['user_name']);
                        $message->subject('NOTICE TO CLOSE A TRADE');
                    });
                } else {
                    // The two dates are not the same
                    // Perform alternative actions if needed
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
