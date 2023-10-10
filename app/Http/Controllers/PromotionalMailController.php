<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionalMailController extends Controller
{
    public function email_template_1()
    {
        $title = 'LIT - Email Template 1';
        return view('admin.templates.email-template-1')->with(compact('title'));
    }

    public function email_template_2()
    {
        $title = 'LIT - Email Template 2';
        return view('admin.templates.email-template-2')->with(compact('title'));
    }

    public function email_template_3()
    {
        $title = 'LIT - Email Template 3';
        return view('admin.templates.email-template-3')->with(compact('title'));
    }

    public function send_promotion_email($type)
    {
        
      
        if($type == 1) {
        $details = [
    		'subject' => 'Free Membership on LTS 😍',
            'type' => $type,
    	];

        $job = (new \App\Jobs\SendQueueEmail($details))
            	->delay(now()->addSeconds(2));
        dispatch($job);
            return redirect()->route('email-template-1')->with('message','Mail was sent successfully.');
        } elseif($type == 2) {
        $details = [
    		'subject' => 'Curious Who Is On LTS? 🔥',
            'type' => $type,
    	];

        $job = (new \App\Jobs\SendQueueEmail($details))
            	->delay(now()->addSeconds(2));
        dispatch($job);
            return redirect()->route('email-template-2')->with('message','Mail was sent successfully.');
        } else {
        $details = [
    		'subject' => 'Make New Friends on LTS 😍',
            'type' => $type,
    	];

        $job = (new \App\Jobs\SendQueueEmail($details))
            	->delay(now()->addSeconds(2));
        dispatch($job);
            return redirect()->route('email-template-3')->with('message','Mail was sent successfully.');
        }

    }
}
