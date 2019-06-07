<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'Persons';
    protected $fillable = ['hours', 'discount', 'money'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
