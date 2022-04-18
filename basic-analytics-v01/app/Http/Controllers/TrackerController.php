<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrackerRequest;
use App\Http\Requests\UpdateTrackerRequest;
use App\Jobs\TrackHitJob;
use App\Models\Hit;
use App\Models\Tracker;
use Illuminate\Http\Request;

class TrackerController extends Controller
{

    //track
    public function track(Request $request, Tracker $tracker)
    {
        TrackHitJob::dispatch($request, $tracker);
    }
}
