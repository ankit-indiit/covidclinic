<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if (!Role::where('name', 'admin')->exists()) {
        	Role::create(['name' => 'Admin']);
    	}

    	if (!Role::where('name', 'patient')->exists()) {
        	Role::create(['name' => 'patient']);
    	}

    	if (!Role::where('name', 'clinic')->exists()) {
        	Role::create(['name' => 'clinic']);
    	}
    }
}
