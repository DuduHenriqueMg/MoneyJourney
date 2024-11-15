<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Lesson;

class ModuleController extends Controller
{
    public function index(){
        
        $modules = Module::with('lessons')->get();

        return Inertia::render('Modules/Index', [
            'modules' => $modules
        ]);
    }

    public function show($id){
        
        
        $module = Module::with('lessons')->findOrFail($id);
        
        

        return Inertia::render('Modules/Show', [
            'module' => $module
        ]);
    }
    
    public function completeLesson($id)
    {
        $user = Auth::user();
        $lesson = Lesson::find($id);

        if (!$user->completedLessons->contains($id)) {

            $user->score += $lesson->pontos;
            $user->save();
            $user->checkForBadges();
            $user->checkLevel();
            $user->completedLessons()->attach($id, ['completed' => true]);
            
        }

        
    }
}
