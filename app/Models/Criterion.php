<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criterion extends Model
{
    protected $fillable = [
        'name',
        'task',
        'description'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function templates()
    {
        return $this->belongsToMany(Template::class, 'template_criterion');
    }

    public function choices()
    {
        return $this->belongsToMany(Choice::class, 'template_criterion_choice', 'criterion_id', 'choice_id')
            ->wherePivot('template_id', $this->pivot->template_id);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
