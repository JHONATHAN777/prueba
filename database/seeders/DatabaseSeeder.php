<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //role and permissions
        $this->call(RoleSeeder::class);
        //base users
        $this->call(UserSeed::class);
        //
        User::factory(10)->create()->each(function($user){

            $user->assignRole('developer');
        });








        
    }
}
