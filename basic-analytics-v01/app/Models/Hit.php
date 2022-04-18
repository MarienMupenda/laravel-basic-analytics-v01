<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hit extends Model
{
    use HasFactory;

    protected $fillable = ['url','tracker_id', 'seconds'];

    public function tracker()
    {
        return $this->belongsTo(Tracker::class);
    }
}
