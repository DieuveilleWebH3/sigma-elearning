<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $table = "courses";

    // the fields to be used / modified
    protected $fillable = ['title', 'duration', 'description', 'picture', 'user_id'];


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'courses_categories', 'post', 'category');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}