<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Question extends Model
{
    protected $table = "questions";
    use HasFactory;

    public function answeres(): HasMany
    {
        return $this->hasMany(Answere::class, 'question_id', 'id');
    }

    public function correct_answere(): HasOne
    {
        return $this->hasOne(Answere::class, 'question_id', 'id')->where('status', 1);
    }
    
}
