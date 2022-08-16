<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function cities()
    {
        return $this->hasMany('App\Models\City', 'state_id', 'id');

    }

    public function country()
    {
        return $this->hasOne('App\Models\Country', 'country_id', 'id');
    }

}
