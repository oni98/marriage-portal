<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'admin@admin.com')->first();
        if(is_null($user)){
            $user = new User();
            $user->name = "Admin";
            $user->email = "admin@admin.com";
            $user->phone = "01768173259";
            $user->password = Hash::make('password');
            $user->email_verified_at = '2022-08-28 16:09:28';
            $user->save();
            $user->assignRole('admin');
        }

        $user = User::where('email', 'admin2@admin.com')->first();
        if(is_null($user)){
            $user = new User();
            $user->name = "Biye Media";
            $user->email = "biyemedia@admin.com";
            $user->phone = "01715949825";
            $user->password = Hash::make('password');
            $user->email_verified_at = '2022-08-28 16:09:28';
            $user->save();
            $user->assignRole('admin');
        }
    }
}
