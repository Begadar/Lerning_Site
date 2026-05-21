<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        $lesson = Lesson::find(1);
        dd($lesson);
    }

    public function create()
    {
        $postsArr = 
       [
            [ 
                'lesson_name' => 'Физика',
                'lesson_topic' => 'Материальная точка',
                'lesson_image' => 'image1.png',
                'lesson_time' => '20',
                'lesson_is_finished' => '0',
            ],
            [ 
                'lesson_name' => 'Физика',
                'lesson_topic' => 'Движение материальной точки',
                'lesson_image' => 'image2.png',
                'lesson_time' => '30',
                'lesson_is_finished' => '0',
            ],
       ];

       Lesson::create($postsArr);
    }
}
