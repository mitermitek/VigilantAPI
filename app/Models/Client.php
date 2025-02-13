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

    public function templates()
    {
        return $this->hasMany(Template::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function audits()
    {
        return $this->hasMany(Audit::class);
    }

    public function criteria()
    {
        return $this->hasMany(Criterion::class);
    }

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }

    public function actions()
    {
        return $this->hasMany(Action::class);
    }
}
