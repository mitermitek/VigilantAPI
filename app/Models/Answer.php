<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'comment'
    ];

    public function audit()
    {
        return $this->belongsTo(Audit::class);
    }

    public function criterion()
    {
        return $this->belongsTo(Criterion::class);
    }

    public function choice()
    {
        return $this->belongsTo(Choice::class);
    }
}
