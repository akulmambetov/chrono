<?php

namespace Database\Seeders;

use App\Events\UserRegisteredEvent;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = User::create(
            [
                'name' => 'Administrator',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ]
        );

        event(new UserRegisteredEvent($user));
    }
}
