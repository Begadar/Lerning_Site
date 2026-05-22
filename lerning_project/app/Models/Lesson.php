<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;
    
    protected $table = "lessons";
    protected $primaryKey = "lesson_id";
    protected $guarded = [];
}
