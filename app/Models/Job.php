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
        'tags',
    ];

    public function tag(string $tag){
        $tag = Tag::firstOrCreate(['name' => $tag]);
        $this->tags()->attach($tag);
    }

    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
