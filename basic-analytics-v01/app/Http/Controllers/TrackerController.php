<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrackerRequest;
use App\Http\Requests\UpdateTrackerRequest;
use App\Models\Hit;
use App\Models\Tracker;
use Illuminate\Http\Request;

class TrackerController extends Controller
{

    //track
    public function track(Request $request, Tracker $tracker)
    {
        $url = $request->url();
        $hit = Hit::create([
            'url' => $url,
            'tracker_id' => $tracker->id,
        ]);
        $previousHit = Hit::where('tracker_id', $tracker->id)->orderBy('id', 'desc')->skip(1)->first();
        if ($previousHit) {
            $previousHit->seconds = $hit->created_at->diffInSeconds($previousHit->created_at);
            $previousHit->save();
            return response()->json(['seconds' => $previousHit->seconds]);
        }
        return 0;
    }
}
