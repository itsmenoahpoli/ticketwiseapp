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

		// admin@ticketwiseapp.com password
		// passenger@ticketwiseapp.com password
		// conductor@ticketwiseapp.com password
		// terminal-manager@ticketwiseapp.com password

		foreach ($roles as $role)
		{
			User::query()->firstOrCreate([
				'name' 		=> $role.' Account',
				'email' 	=> $role.'@ticketwiseapp.com',
				'password' 	=> bcrypt('password'),
				'user_type' => $role
			]);
		}
    }
}
