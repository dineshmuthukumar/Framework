<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

Class Role extends Model
{
public function Users()
	{
return $this->belongsToMany(User::class);
	}
}