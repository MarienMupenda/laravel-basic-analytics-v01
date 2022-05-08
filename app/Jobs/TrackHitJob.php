<?php

namespace App\Jobs;

use App\Models\Hit;
use App\Models\Tracker;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class TrackHitJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $url;
    private $tracker_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Request $request, Tracker $tracker)
    {
        $this->url = $request->url();
        $this->tracker_id = $tracker->id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $hit = Hit::create([
            'url' => $this->url,
            'tracker_id' => $this->tracker_id,
        ]);
        $previousHit = Hit::where('tracker_id', $this->tracker_id)->orderBy('id', 'desc')->skip(1)->first();
        if ($previousHit) {
            $previousHit->seconds = $hit->created_at->diffInSeconds($previousHit->created_at);
            $previousHit->save();
            return response()->json(['seconds' => $previousHit->seconds]);
        }
        return 0;
    }
}
