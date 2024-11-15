<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'conteudo'];

    protected $casts = [
        'conteudo' => 'array',
    ];

    public function lessons()
    {
        return $this->HasMany(Lesson::class);
    }
}
