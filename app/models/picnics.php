<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class picnics extends Model
{
    protected $fillable = array('name', 'taste_level');

    // DEFINE RELATIONSHIPS --------------------------------------------------
    // define a many to many relationship
    // also call the linking table
    public function bears() {
        return $this->belongsToMany('Bear', 'bears_picnics', 'picnic_id', 'bear_id');
    }
}
