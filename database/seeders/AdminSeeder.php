<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('email', 'developer@gmail.com')->exists()) {
        	User::create([
        		'first_name' => 'Developer',
                'last_name' => '',
        		'email' => 'developer@gmail.com',
        		'password' => Hash::make('developer@123'),                
                'role' => 'admin',                
        	]);
        }

        if (!User::where('email', 'clinic@gmail.com')->exists()) {
            User::create([
                'first_name' => 'Clinic',
                'last_name' => 'Clinic',
                'email' => 'clinic@gmail.com',
                'password' => Hash::make('clinic@123'),                
                'role' => 'clinic',                
            ]);
        }

        if (!User::where('email', 'patient@gmail.com')->exists()) {
            User::create([
                'first_name' => 'Patient',
                'last_name' => 'Patient',
                'email' => 'patient@gmail.com',
                'password' => Hash::make('patient@123'),                
                'role' => 'patient',               
            ]);
        }
    }
}
