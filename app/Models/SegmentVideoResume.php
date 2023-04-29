<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SegmentVideoResume extends Model
{
    use HasFactory;

    public function videoResume(){
        return $this->belongsTo(VideoResume::class);
    }
}