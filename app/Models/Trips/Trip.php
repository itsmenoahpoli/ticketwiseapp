<?php

namespace App\Models\Trips;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trip extends Model
{
    use HasFactory;

	protected $guarded = [];

	public function casts() : array
	{
		return [
			'current_location' => 'object'
		];
	}

	public function users() : HasMany
	{
		return $this->hasMany(\App\Models\User::class);
	}
}
