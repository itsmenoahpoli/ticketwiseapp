<?php

namespace App\Services;

use App\Models\User;

class UsersService
{
	public function __construct(
		public readonly User $user
	)
	{}
}
