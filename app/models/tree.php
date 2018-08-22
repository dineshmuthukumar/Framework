<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class tree extends Model
{
     protected $fillable = array('type', 'age', 'bear_id');

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function bear() {
        return $this->belongsTo('Bear');
    }
}
