<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $table = "chapters";

    protected $fillable = ['title', 'slug', 'content', 'video', 'video_url', 'course'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'id', 'course');
    }

}
