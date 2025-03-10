<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    protected $fillable = [
        'employer_id',
        'title',
        'location',
        'salary',
        'employer_id',
        'schedule',
        'url',
        'featured',
    ];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }
}
