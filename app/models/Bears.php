<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Bears extends Model
{
    //protected $fillable = array('name', 'type', 'danger_level');

    public function fish() {
        return $this->hasOne('Fish'); // this matches the Eloquent model
    }

    // each bear climbs many trees
    public function trees() {
        return $this->hasMany('Tree');
    }

    // each bear BELONGS to many picnic
    // define our pivot table also
    public function picnics() {
        return $this->belongsToMany('Picnic', 'bears_picnics', 'bear_id', 'picnic_id');
    }
}
