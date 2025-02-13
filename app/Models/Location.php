<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'hash',
        'name',
        'address',
        'city',
        'postal_code',
        'country'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
