<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin', 'passenger', 'conductor', 'terminal-manager'];

		// admin@domain.com password
		// passenger@domain.com password
		// conductor@domain.com password
		// terminal-manager@domain.com password

		foreach ($roles as $role)
		{
			User::query()->firstOrCreate([
				'name' 		=> $role.' Account',
				'email' 	=> $role.'@domain.com',
				'password' 	=> bcrypt('password'),
				'user_type' => $role
			]);
		}
    }
}
