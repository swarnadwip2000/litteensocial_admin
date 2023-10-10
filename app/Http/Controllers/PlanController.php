<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function list()
    {
        $title = "LIT - Advertisment Plans";
        $plans = Plan::orderBy('id', 'desc')->get();
        return view('admin.plans.list')->with(compact('plans','title'));
    }

    public function create()
    {
        $title = "LIT - Advertisment Create";
        return view('admin.plans.create')->with(compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'duration' => 'required|numeric',
            'amount' => 'required|numeric'
        ]);

        $plan = new Plan;
        $plan->name = $request->name;
        $plan->type = $request->type;
        $plan->duration = $request->duration;
        $plan->amount = $request->amount;
        $plan->save();
        return redirect()->route('plans.index')->with('message', 'Plan have been added successfully.');
    }

    public function edit($id)
    {
        $title = "LIT - Advertisment Plans Edit";
        $plan = Plan::findOrFail($id);
        return view('admin.plans.edit')->with(compact('plan','title'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'duration' => 'required|numeric',
            'amount' => 'required|numeric',
            'type' => 'required'
        ]);

        $plan = Plan::findOrFail($request->id);
        $plan->name = $request->name;
        $plan->type = $request->type;
        $plan->duration = $request->duration;
        $plan->amount = $request->amount;
        $plan->save();
        return redirect()->route('plans.index')->with('message', 'Plan have been updated successfully.');
    }
}
