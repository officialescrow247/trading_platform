<?php

namespace App\Console\Commands;

use App\Models\Setting;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CloseTrade extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'close:trade';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $getTransactions = Transaction::where('user_id', auth()->id())->where('status', 'ACTIVE')->where('duration', '!=', NULL)->latest()->get();
        
        // foreach($getTransactions as $transaction){
        //     $duration = $transaction->duration;
            
        //     if (str_contains($duration, 'minute') || str_contains($duration, 'minutes')){
        //         $getValue = Str::before($duration, ' minute');
        //         if($getValue == 1){
        //             $targetDate = $transaction->created_at->addMinute();
        //         }else{
        //             $targetDate = $transaction->created_at->addMinutes($getValue);
        //         }
        //     }elseif(str_contains($duration, 'hour') || str_contains($duration, 'hours')){
        //         $getValue = Str::before($duration, ' minute');
        //         if($getValue == 1){
        //             $targetDate = $transaction->created_at->addHour();
        //         }else{
        //             $targetDate = $transaction->created_at->addHours($getValue);
        //         }
        //     }elseif(str_contains($duration, 'day') || str_contains($duration, 'days')){
        //         $getValue = Str::before($duration, ' minute');
        //         if($getValue == 1){
        //             $targetDate = $transaction->created_at->addDay();
        //         }else{
        //             $targetDate = $transaction->created_at->addDays($getValue);
        //         }
        //     }elseif(str_contains($duration, 'week') || str_contains($duration, 'weeks')){
        //         $getValue = Str::before($duration, ' minute');
        //         if($getValue == 1){
        //             $targetDate = $transaction->created_at->addWeek();
        //         }else{
        //             $targetDate = $transaction->created_at->addWeeks($getValue);
        //         }
        //     }elseif(str_contains($duration, 'month') || str_contains($duration, 'months')){
        //         $getValue = Str::before($duration, ' minute');
        //         if($getValue == 1){
        //             $targetDate = $transaction->created_at->addMonth();
        //         }else{
        //             $targetDate = $transaction->created_at->addMonths($getValue);
        //         }
        //     }else{
        //         return "I didn't capture this.";
        //     }

        //     if (!$targetDate->isPast()) {
        //         // Duration has been reached, send an email to the user
        //         $admin_data = [
        //             'admin_email' => Setting::where('name', 'support_email')->value('value'),
        //             'site_name' => env('APP_NAME'),
        //             'user_name' => 'Admin',
        //             'msg' => "It's time to close a Trade with this ID #A2023" . $transaction->id . '.',
        //         ];
        //         Mail::send('mails.email_template2', $admin_data, function ($message) use ($admin_data) {
        //             $message->from($admin_data['admin_email'], $admin_data['site_name']);
        //             $message->to($admin_data['admin_email'], $admin_data['user_name']);
        //             $message->subject('NOTICE TO CLOSE A TRADE');
        //         });
        //     }
        // }
        
        // return Command::SUCCESS;
    }
}
