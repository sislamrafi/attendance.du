<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // attandance permissions
        Permission::create(['name' => 'new.attendance']);
        Permission::create(['name' => 'edit.attendance']);
        Permission::create(['name' => 'delete.attendance']);
        Permission::create(['name' => 'show.attendance']);
        Permission::create(['name' => 'list.attendance']);

        // card permissions
        Permission::create(['name' => 'new.card']);
        Permission::create(['name' => 'edit.card']);
        Permission::create(['name' => 'delete.card']);
        Permission::create(['name' => 'list.card']);
        Permission::create(['name' => 'show.card']);
        Permission::create(['name' => '*.card']);


        // class permissions
        Permission::create(['name' => 'new class']);
        Permission::create(['name' => 'edit class']);
        Permission::create(['name' => 'delete class']);


        // create roles and assign existing permissions
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo(Permission::all());

        $teacher = Role::create(['name' => 'teacher']);
        $teacher->givePermissionTo('new class');
        $teacher->givePermissionTo('edit class');
        $teacher->givePermissionTo('delete class');
        $teacher->givePermissionTo('new attendance');
        $teacher->givePermissionTo('edit attendance');
        $teacher->givePermissionTo('delete attendance');


        $student = Role::create(['name' => 'student']);
        $student->givePermissionTo('new attendance');
        $student->givePermissionTo('edit attendance');
        $student->givePermissionTo('delete attendance');

        $user = \App\Models\User::factory()->create([
            'name' => 'S Islam Rafi',
            'email' => 'sislamrafi333@gmail.com',
        ]);
        $user->assignRole($admin);

        $user = \App\Models\User::factory()->create([
            'name' => 'Teacher',
            'email' => 'teacher@example.com',
        ]);
        $user->assignRole($teacher);

        $user = \App\Models\User::factory()->create([
            'name' => 'Student',
            'email' => 'student@example.com',
        ]);
        $user->assignRole($student);
    }
}
