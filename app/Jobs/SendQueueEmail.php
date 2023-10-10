<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Usermodel;
use Mail;

class SendQueueEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    public $timeout = 7200; // 2 hours

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->details['type'] == 1) {
            $data = Usermodel::get();

            $input['subject'] = $this->details['subject'];
            foreach ($data as $key => $value) {
                $input['email'] = $value->email;
                $input['name'] = $value->full_name_id;
                \Mail::send('emails.template1', [], function($message) use($input){
                    $message->to($input['email'], $input['name'])
                        ->subject($input['subject']);
                });
            }
        } elseif($this->details['type'] == 2) {
            $data = Usermodel::where('premium', 0)->get();

            $input['subject'] = $this->details['subject'];
            foreach ($data as $key => $value) {
                $input['email'] = $value->email;
                $input['name'] = $value->full_name_id;
                \Mail::send('emails.template2', [], function($message) use($input){
                    $message->to($input['email'], $input['name'])
                        ->subject($input['subject']);
                });
            }
        } else {
            $data = Usermodel::where('premium', 0)->get();
            // get random user from database
            $users = UserModel::inRandomOrder()->limit(9)->get();
            // $data = [
            //     (object) [
            //         'email' => 'swarnadwip2k13@gmail.com',
            //         'full_name' => 'ss das'
            //     ],
            //     (object) [
            //         'email' => 'dd@yopmail.com',
            //         'full_name' => 'dd das'
            //     ],
            // ];
            $input['subject'] = $this->details['subject'];
            foreach ($data as $key => $value) {
                $input['email'] = $value->email;
                $input['name'] = $value->full_name_id;
                \Mail::send('emails.template3', ['users' => $users], function($message) use($input){
                    $message->to($input['email'], $input['name'])
                        ->subject($input['subject']);
                });
            }
        }


    }
}
