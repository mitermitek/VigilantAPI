<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnswerAction extends Model
{
    protected $fillable = [
        'is_done'
    ];

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }

    public function action()
    {
        return $this->belongsTo(Action::class);
    }
}
