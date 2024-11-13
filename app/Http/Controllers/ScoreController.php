<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Badge;

class ScoreController extends Controller
{
    public function updateScore(Request $request)
    {
        $user =  Auth::user();
        $user->score += $request->points;
        $user->save();

        $this->checkForBadges($user);
    }

    private function checkForBadges($user)
    {
        $badges = Badge::where('required_score', '<=', $user->score)->get();

        foreach ($badges as $badge) {
            if (!$user->badges->contains($badge->id)) {
                $user->badges()->attach($badge->id);
            }
        }

    }
}
