<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    protected $fillable = [
        'number', 'user_id', 'place_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function place()
    {
        return $this->belongsTo('App\Place');
    }
}
