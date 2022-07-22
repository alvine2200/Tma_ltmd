<?php

namespace App\Http\Controllers\Admin;

use App\Models\Stat;
use Illuminate\Http\Request;
use App\Http\Requests\StatsRequest;
use App\Http\Controllers\Controller;

class ButterflyStatsController extends Controller
{
    public function stats()
    {
        $data=Stat::all();
        return view('admin.stats',compact('data'));
    }

    public function add_stats(StatsRequest $request)
    {
        $validated=$request->validated();
        Stat::firstOrCreate($validated);

        return back()->with('success','Stats successfully Posted');
    }

    public function show_stats($id)
    {
        $data=Stat::find($id);
        return view('admin.edit_stats',compact('data'));
    }

    public function edit_stats(StatsRequest $request,$id)
    {
        $data=Stat::find($id);
        $validated=$request->validated();
        $data->update($validated);

        return back()->with('data',$data);

    }
}
