<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{

    use HasFactory;

    protected $fillable = [
        'nome', 'descricao', 'required_score'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
