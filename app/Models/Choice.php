<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = [
        'name',
        'score'
    ];

    protected function casts()
    {
        return [
            'score' => 'float'
        ];
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function templates()
    {
        return $this->belongsToMany(Template::class, 'template_criterion_choice');
    }

    public function actions()
    {
        return $this->belongsToMany(Action::class, 'template_choice_action', 'choice_id', 'action_id')
            ->wherePivot('template_id', $this->pivot->template_id);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
