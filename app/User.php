<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class User extends Model
{
	public function Roles()
	{
		return $this->belongsToMany(Role::class);
	}
}