<?php

namespace App\Http\Controllers;

use App\Models\Usersubscribemodel;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function list()
    {
        $title = 'LIT - User Subscriber List';
        $subscribers = Usersubscribemodel::with(['user','subscribe'])->orderBy('id','desc')->get();
        // dd($subscribers);
        return view('admin.subscriber.list')->with(compact('subscribers','title'));
    }
}
