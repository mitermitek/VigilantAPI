<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $fillable = [
        'rdv',
        'is_done'
    ];

    protected function casts()
    {
        return [
            'rdv' => 'datetime',
            'is_done' => 'boolean'
        ];
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function auditor()
    {
        return $this->belongsTo(User::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
