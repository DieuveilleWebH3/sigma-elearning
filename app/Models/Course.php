<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $table = "courses";

    // the fields to be used / modified
    protected $fillable = ['title', 'slug', 'duration', 'description', 'picture', 'level', 'user_id'];


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'courses_categories', 'course', 'category');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function level()
    {
        return $this->hasOne(Level::class, 'id', 'level');
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'course', 'id');
    }


    public function countChapters()
    {
        // return sizeof($this->chapters);

        return count($this->chapters);
    }


    public function getLevelName()
    {
        $level_id = $this->level;

        // $level = Level::find($level_id);

        // return $level->name;

        return Level::find($level_id)->name;
    }
}
