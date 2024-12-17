<?php

namespace App\Models\Trips;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trip extends Model
{
    use HasFactory;

	protected $guarded = [];

	protected $casts = [
        'current_location' => 'array',
    ];

	public function users() : HasMany
	{
		return $this->hasMany(\App\Models\User::class);
	}
}
