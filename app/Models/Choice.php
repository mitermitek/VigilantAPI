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
}
