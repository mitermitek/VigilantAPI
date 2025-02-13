<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [
        'name'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function criteria()
    {
        return $this->belongsToMany(Criterion::class, 'template_criterion');
    }
}
