<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // all permissions spaite
        $permissions = [
            'view dashboard',
            // Admin & User Management
            'manage admins',
            'view users',
            'manage users',
            'suspend users',
            'verify users',

            // Role & Permission
            'view roles',
            'manage roles',
            'view permissions',
            'manage permissions',

            // Categories & Skills
            'view categories',
            'manage categories',
            'view skills',
            'manage skills',

            // Freelancer
            'browse freelancers',
            'view freelancer profiles',
            'manage own profile',
            'manage own portfolio',
            'manage own skills',
            'save freelancers',

            // Projects
            'browse projects',
            'view projects',
            'view own projects',
            'create projects',
            'edit own projects',
            'delete own projects',
            'close own projects',
            'manage all projects',
            'approve projects',

            // Proposals
            'view proposals',
            'submit proposals',
            'edit own proposals',
            'withdraw own proposals',
            'manage received proposals',

            // Contracts
            'view own contracts',
            'manage own contracts',
            'view all contracts',
            'manage all contracts',

            // Services
            'view services',
            'manage own services',
            'manage all services',

            // Messages
            'view messages',
            'send messages',
            'manage messages',

            // Payments & Earnings
            'view own payments',
            'manage own payments',
            'view transactions',
            'view own earnings',
            'manage payments',
            'manage withdrawals',
            'request withdrawals',

            // Reviews & Ratings
            'view reviews',
            'create reviews',
            'manage reviews',

            // Reports & Settings
            'view reports',
            'manage reports',
            'manage settings',

            // Notifications
            'view notifications'
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        //assign permissions to roles
        // Super Admin: All Permissions
        Role::findByName('super admin')->syncPermissions($permissions);

        // Admin Permissions
        Role::findByName('admin')->syncPermissions([
            'view dashboard',
            'view users',
            'manage users',
            'suspend users',
            'verify users',
            'view categories',
            'manage categories',
            'view skills',
            'manage skills',
            'view freelancer profiles',
            'browse freelancers',
            'view projects',
            'manage all projects',
            'approve projects',
            'view proposals',
            'view all contracts',
            'manage all contracts',
            'view services',
            'manage all services',
            'view messages',
            'send messages',
            'manage messages',
            'view transactions',
            'manage payments',
            'manage withdrawals',
            'view reviews',
            'manage reviews',
            'view reports',
            'manage reports',
            'view notifications',
        ]);

        // Client Permissions
        Role::findByName('client')->syncPermissions([
            'view dashboard',
            'browse freelancers',
            'view freelancer profiles',
            'save freelancers',
            'view categories',
            'view skills',
            'view own projects',
            'create projects',
            'edit own projects',
            'delete own projects',
            'close own projects',
            'view proposals',
            'manage received proposals',
            'view own contracts',
            'manage own contracts',
            'view services',
            'view messages',
            'send messages',
            'view own payments',
            'manage own payments',
            'view transactions',
            'view reviews',
            'create reviews',
            'view notifications',
        ]);

        // Freelancer Permissions
        Role::findByName('freelancer')->syncPermissions([
            'view dashboard',
            'browse projects',
            'view projects',
            'view categories',
            'view skills',
            'view services',
            'manage own profile',
            'manage own portfolio',
            'manage own skills',
            'save freelancers',
            'view proposals',
            'submit proposals',
            'edit own proposals',
            'withdraw own proposals',
            'view own contracts',
            'manage own contracts',
            'manage own services',
            'view messages',
            'send messages',
            'view own earnings',
            'request withdrawals',
            'view transactions',
            'view reviews',
            'create reviews',
            'view notifications',
        ]);
    }
}
