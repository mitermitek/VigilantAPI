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
}
