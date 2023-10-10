<?php


namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertisment;
use App\Models\Plan;
use Auth;
use Stripe;

class AdvertiserController extends Controller
{
    public function index()
    {

        $title = 'Lit-Advertiser Section';
        $advertisments = Advertisment::with('plan')->where('advertiser_id', Auth::guard('advertiser')->user()->id)->orderBy('id','desc')->get();
        return view('advertiser.list')->with(compact('title','advertisments'));
    }

    public function addAdvertisment()
    {
        $title = 'Create Your Advertisment';
        $plans = Plan::orderBy('id', 'desc')->get();
        return view('advertiser.add-advertisment')->with(compact('title','plans'));
    }

    public function planPrice(Request $request)
    {
        $plan = Plan::find($request->id);
        return response()->json(['data'=>$plan]);
    }

    public function advertiserStripePayment(Request $request)
    {
        // return $request->all();
        $request->validate([
            'plan_id' => 'required',
            'type' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif,webp|max:10000|dimensions:min_width=350,min_height=600',
        ]);

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

                 $customer = Stripe\Customer::create(array(
                    "email" => Auth::guard('advertiser')->user()->email,
                    "name" => $request->cc_name,
                    "source" => $request->stripeToken
                ));

                $plan = Plan::find($request->plan_id);
                // $card

                $charge = Stripe\Charge::create([
                    "amount" => 100 * $plan->amount,
                    "currency" => "usd",
                    "customer" => $customer->id,
                    "description" => "Membership Plan Payment for " . $plan->name . " Plan.",

                ]);

                if ($charge->status == 'succeeded') {
                    $data = new Advertisment;
                    $data->advertiser_id = Auth::guard('advertiser')->user()->id;
                    $data->plan_id = $request->plan_id;
                    $data->transaction_id = $charge->id;
                    $data->payment_method = $charge->payment_method_details->type;
                    $data->payment_status = $charge->status;
                    $data->amount = $plan->amount;
                    $data->status = false;
                    $data->type = $request->type;

                    if ($request->hasFile('image')) {  //check the file present or not
                        $image = $request->file('image'); //get the file
                        $name = rand(11111, 99999).'.'.$image->getClientOriginalExtension(); //get the  file extention
                        $destinationPath = public_path('/images/advertisment'); //public path folder dir
                        $image->move($destinationPath, $name);  //mve to destination you mentioned
                        $data->image='https://lt-admin.mynewsystem.net/public/images/advertisment/'.$name;
                    }
                    $data->save();
                    return redirect()->route('advertiser.index')->with('message', 'Payment has been done successfully.');
                } else {
                    return redirect()->back()->with('error', 'Payment failed.');
                }
         }

    public function advertismentDelete($id)
    {
        Advertisment::find($id)->delete();
        return redirect()->back()->with('error', 'Advertisment has been deleted from site');
    }

    public function editAdvertisment($id)
    {
        $title = "Lit- Advertisment Update";
        $advertisment = Advertisment::find($id);
        return view('advertiser.edit-advertisment')->with(compact('advertisment','title'));
    }

    public function updateAdvertisment(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png,gif,webp|max:10000|dimensions:min_width=350,min_height=600',
        ]);

        $data = Advertisment::find($request->id);
        if ($request->hasFile('image')) {  //check the file present or not
            $image = $request->file('image'); //get the file
            $name = rand(11111, 99999).'.'.$image->getClientOriginalExtension(); //get the  file extention
            $destinationPath = public_path('/images/advertisment'); //public path folder dir
            $image->move($destinationPath, $name);  //mve to destination you mentioned
            $data->image='https://lt-admin.mynewsystem.net/public/images/advertisment/'.$name;
        }

        $data->save();
        return redirect()->route('advertiser.index')->with('message', 'Advertisment image updated successfully');
    }

    public function fetchPlans(Request $request)
    {
        $data['plans'] = Plan::where("type",$request->type)->get();
        return response()->json($data);
    }
}
