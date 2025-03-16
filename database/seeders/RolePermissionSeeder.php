<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Buat Role
        $admin = Role::create(['name' => 'admin']);
        $contentWriter = Role::create(['name' => 'contentwriter']);
        $counseler = Role::create(['name' => 'counseler']);
        $organizer = Role::create(['name' => 'organizer']);
        $rekrutmen = Role::create(['name' => 'rekrutmen']);

        // Buat Permission
        $permissions = [
            'dashboard.view',
            'artikel.create',
            'artikel.read',
            'artikel.update',
            'artikel.delete',
            'konseling.create',
            'konseling.read',
            'konseling.update',
            'konseling.delete',
            'organizer.create',
            'organizer.read',
            'organizer.update',
            'organizer.delete',
            'rekrutmen.create',
            'rekrutmen.read',
            'rekrutmen.update',
            'rekrutmen.delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Assign permissions ke role masing-masing
        $admin->givePermissionTo(Permission::all());

        $contentWriter->givePermissionTo([
            'dashboard.view',
            'artikel.create',
            'artikel.read',
            'artikel.update',
            'artikel.delete',
        ]);

        $counseler->givePermissionTo([
            'dashboard.view',
            'konseling.create',
            'konseling.read',
            'konseling.update',
            'konseling.delete',
        ]);

        $organizer->givePermissionTo([
            'dashboard.view',
            'organizer.create',
            'organizer.read',
            'organizer.update',
            'organizer.delete',
        ]);

        $rekrutmen->givePermissionTo([
            'dashboard.view',
            'rekrutmen.create',
            'rekrutmen.read',
            'rekrutmen.update',
            'rekrutmen.delete',
        ]);
    }
}

