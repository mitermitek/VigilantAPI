<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = [
        'name',
        'delay'
    ];

    protected function casts()
    {
        return [
            'delay' => 'integer'
        ];
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function templates()
    {
        return $this->belongsToMany(Template::class, 'template_choice_action');
    }
}
