<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorRequest extends Model
{
    use HasFactory;

    protected $table = "instructor_requests";

    protected $fillable = ['firstname', 'lastname', 'email', 'authorization'];

}
