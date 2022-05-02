<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        /* Amin = diseñado para ver todo
         manager = ver producrtos 
         developer = unicamente diseñado para evr el dashboard
         */

       $admin = Role::create(['name' => 'admin']);
        $manager = Role::create(['name' => 'manager']);
        $developer = Role::create(['name' => 'developer']);

        Permission::create(['name' => 'dashboard'])->syncRoles([$admin, $manager, $developer]);
        Permission::create(['name' => 'suers.index'])->syncRoles([$admin, $manager]);
        Permission::create(['name' => 'suers.create'])->syncRoles([$admin, $manager]);
        Permission::create(['name' => 'suers.edit'])->syncRoles([$admin]);
        Permission::create(['name' => 'suers.store'])->syncRoles([$admin]);
        Permission::create(['name' => 'suers.destroy'])->syncRoles([$admin]);
        Permission::create(['name' => 'suers.update'])->syncRoles([$admin]);
        Permission::create(['name' => 'suers.show'])->syncRoles([$admin]);

       
        Permission::create(['name' => 'products.index'])->syncRoles([$admin, $manager]);
        Permission::create(['name' => 'products.create'])->syncRoles([$admin, $manager]);
        Permission::create(['name' => 'products.edit'])->syncRoles([$admin]);
        Permission::create(['name' => 'products.store'])->syncRoles([$admin]);
        Permission::create(['name' => 'products.destroy'])->syncRoles([$admin]);
        Permission::create(['name' => 'products.update'])->syncRoles([$admin]);
        Permission::create(['name' => 'products.show'])->syncRoles([$admin]);

        
        Permission::create(['name' => 'categories.index'])->syncRoles([$admin, $manager]);
        Permission::create(['name' => 'categories.create'])->syncRoles([$admin, $manager]);
        Permission::create(['name' => 'categories.edit'])->syncRoles([$admin]);
        Permission::create(['name' => 'categories.store'])->syncRoles([$admin]);
        Permission::create(['name' => 'categories.destroy'])->syncRoles([$admin]);
        Permission::create(['name' => 'categories.update'])->syncRoles([$admin]);
        Permission::create(['name' => 'categories.show'])->syncRoles([$admin]);
    }
}
