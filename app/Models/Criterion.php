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
}
