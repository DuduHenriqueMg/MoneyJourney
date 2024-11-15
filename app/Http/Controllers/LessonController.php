<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

use App\Models\Lesson;


class LessonController extends Controller
{
    public function index(Request $request)
    {   
        $user = auth()->user()->load(['completedLessons']);
        $lessons = Lesson::all();
        $lessonProgress = (count($user->completedLessons)/ count($lessons)) * 100;
        return Inertia::render('Lessons/Index', [
            'user' => $user,
            'lessonProgress' => $lessonProgress
        ]);
    }

}
