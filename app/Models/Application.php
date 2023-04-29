<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public function applicant(){
        return $this->belongsTo(Applicant::class);
    }

    public function videoResume(){
        return $this->hasOne(VideoResume::class);
    }
}