<?php

namespace App\Console\Commands;

use App\Models\Usermodel;
use Illuminate\Console\Command;
use App\Models\Usersubscribemodel;
use Illuminate\Support\Facades\Log;
class PrimeCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prime:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prime corn hit successfully';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         $userSubs = Usersubscribemodel::where('exp_date', date('Y-m-d'))->get();
        //  dd($userSubs);
        if($userSubs->count() > 0) {
            foreach ($userSubs as $key => $subscribe) {
                Usermodel::where('id', $subscribe->user_id)->update(['premium'=>0]);
             }
             $this->info('Prime cron hit successfully');
        } else {
            Log::info("No data found");
        }

    }
}
