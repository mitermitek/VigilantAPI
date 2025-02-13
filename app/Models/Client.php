<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'logo'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
