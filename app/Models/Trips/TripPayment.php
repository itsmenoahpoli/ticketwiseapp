<?php

namespace App\Models\Trips;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TripPayment extends Model
{
    use HasFactory;

	protected $guarded = [];

	public function user() : BelongsTo
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
