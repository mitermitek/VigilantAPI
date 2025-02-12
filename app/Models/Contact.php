<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function audits()
    {
        return $this->hasMany(Audit::class);
    }
}
