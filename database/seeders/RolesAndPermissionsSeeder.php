<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'accountant']);
        

        // Define permissions
        Permission::create(['name' => 'create accountant']);
        Permission::create(['name' => 'edit accountant']);
        Permission::create(['name' => 'delete accountant']);
        //Permission::create(['name' => 'delete accountant']);
        

        // Assign permissions to roles
        Role::findByName('admin')->syncPermissions(['create accountant', 'edit accountant', 'delete accountant']);
        Role::findByName('accountant')->syncPermissions(['create accountant']);
       
    }
}
