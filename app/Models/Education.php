<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    public function applicant(){
        return $this->belongsToMany(Applicant::class, 'applicant_education');
    }
}
