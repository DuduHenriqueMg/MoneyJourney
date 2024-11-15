<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'score',
        'level'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function badges()
    {
        return $this->belongsToMany(Badge::class);
    }

    public function completedLessons()
    {
        return $this->belongsToMany(Lesson::class, 'lesson_user')->withPivot('completed')->wherePivot('completed', true);
    }

    public function completeLesson($lessonId)
    {
        $this->completedLessons()->attach($lessonId, ['completed' => true]);
    }

    public function checkForBadges()
    {
        
        $badges = Badge::where('required_score', '<=', $this->score)->get();

        foreach ($badges as $badge) {
            if (!$this->badges->contains($badge->id)) {
                $this->badges()->attach($badge->id);
            }
        }
    }

    public function checkLevel()
    {

        if ($this->score >= 90) {
            $this->level = 4;
        }elseif ($this->score >= 50) {
            $this->level = 3;
        }elseif ($this->score >= 20){
            $this->level = 2;
        }

        $this->save();
        
        
    }
    
}
