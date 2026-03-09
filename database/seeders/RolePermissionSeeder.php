<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        // daftar permission
        $permissions = [

            // users
            'view_users',
            'create_users',
            'edit_users',
            'delete_users',

            // teacher staff
            'view_teacher_staff',
            'create_teacher_staff',
            'edit_teacher_staff',
            'delete_teacher_staff',

            // students
            'view_students',
            'create_students',
            'edit_students',
            'delete_students',

            // classes
            'view_classes',
            'create_classes',
            'edit_classes',
            'delete_classes',

            // attendance
            'view_attendance',
            'create_attendance',
            'edit_attendance',
            'delete_attendance',

            // grades
            'view_grades',
            'create_grades',
            'edit_grades',
            'delete_grades',

            // ppdb
            'view_ppdb',
            'accept_ppdb',
            'reject_ppdb',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web'
            ]);
        }

        // roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $kepsek = Role::firstOrCreate(['name' => 'kepala_sekolah']);
        $kepsekReadonly = Role::firstOrCreate(['name' => 'kepala_sekolah_readonly']);
        $guru = Role::firstOrCreate(['name' => 'guru']);

        // admin full access
        $admin->syncPermissions(Permission::all());

        // kepala sekolah full (kecuali user management)
        $kepsek->syncPermissions([
            'view_teacher_staff',
            'view_students',
            'view_classes',
            'view_attendance',
            'view_grades',
            'view_ppdb',
            'accept_ppdb',
            'reject_ppdb',
        ]);

        // kepala sekolah readonly
        $kepsekReadonly->syncPermissions([
            'view_teacher_staff',
            'view_students',
            'view_classes',
            'view_attendance',
            'view_grades',
            'view_ppdb',
        ]);

        // guru
        $guru->syncPermissions([
            'view_students',
            'view_classes',
            'view_attendance',
            'create_attendance',
            'edit_attendance',
            'view_grades',
            'create_grades',
            'edit_grades',
        ]);
    }
}
