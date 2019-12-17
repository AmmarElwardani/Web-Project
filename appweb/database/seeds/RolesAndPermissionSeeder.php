<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app()['cache']->forget('spatie.permission.cache');
        Role::create(['name' => 'etudiant']);
        Role::create(['name' => 'entreprise']);
        Role::create(['name' => 'Super Admin']);
    }
}
