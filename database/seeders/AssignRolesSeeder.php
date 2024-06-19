<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AssignRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
        public function run()
        {
          
            $user = User::find(1);
    
            // Assign roles
            $user->assignRole('admin');
    
          
        }
    
}
